<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=big5">
		<TITLE>題組二附件3</TITLE>
	</HEAD>
	<BODY>
		<?php
                       //設定數字顯示為 99,999,999之型態函數
                               function po3($a)
                               {
                                  $an="";
                                  $t=$a;
                                  while($t>999)
                                  {
                                    $k=(int)($t/1000);    //取千位整數
                                    $p=$t-$k*1000;      //取千位小數
                                    if($p==0)
                                    {
                                      $an=",000".$an;
                                    }
                                    elseif($p<10)
                                    {
                                      $an=",00".$p.$an;
                                    }
                                    elseif($p<100)
                                    {
                                      $an=",0".$p.$an;
                                    }
                                    else
                                    {
                                      $an=",".$p.$an;
                                    }
                                    $t=$k;
                                  }
                                  $an=$t.$an;
                                  return $an;
                               }
/*
         依題目要求設定　業務部門績效評比 成果報表之［二維陣列］

                         @$paper[一維][二維]

           [一維]之索引包含     [dp]:部門代號、[na]:姓名、[jo]:職稱、[nday]:未休假奬金、[opa]:加班費、[yp]:年薪資、[ttsale]:業績總額、[perc]:比例
                                [mp]:月薪資、[d1]:年假天數、[d2]:休假天數、[o1]:加班時數
           [二維]之索引為       [0] --> [n]  代表業部門之員工數
*/
//步驟一:  連結mysql資料庫  並  開啟 頂新公司(123)資料庫
   //連結MYSQL資料庫系統
			$link = mysqli_connect("localhost", "root");

   //開啟123資料庫
			$db_selected = mysqli_select_db($link, "t123");

//步驟二:  讀取相關資料表之記錄內容
   //設定編碼型態
                        mysqli_query($link, "SET NAMES UTF8");

   //讀取 employee 資料表中之 業務部門 員工資料(sql0、$result、$row)
			$sql0 = "SELECT * FROM employee where 部門代號 IN('D01','D02','D03','D04')";
			$result = mysqli_query($link, $sql0);

	         //擷取業務部門職員工基本資料(部門代號、姓名、職稱、月薪、年假天數)
                        $k=0;  //記錄資料筆數

                 //依序讀取 employee 資料,並轉入@$paper[]陣列

			while ($row = mysqli_fetch_array($result, MYSQL_NUM))
			{
                          @$paper[dp][$k]=$row[2];       //部門代號轉置
                          @$paper[na][$k]=$row[0];       //姓名轉置
                          @$paper[jo][$k]=$row[1];       //職稱轉置
                          @$paper[mp][$k]=$row[7];       //目前月薪資轉置
                          @$paper[yp][$k]=(int)(@$paper[mp][$k]*16.5+0.5);  //計算年薪資
                          @$paper[d1][$k]=$row[8];       //年假天數轉置
	                  $k++;
			}                                                      //46列
                                                      
         

//步驟三:依報表列印要求進行排序
array_multisort($paper["dp"],SORT_STRING,SORT_ASC,$paper["yp"],SORT_NUMERIC,SORT_DESC,$paper["na"],SORT_NUMERIC,SORT_ASC,$paper["jo"],$paper["d1"],$paper["mp"]);
                

//步驟四:讀取休資料表中之記錄內容,統計未休假奬金(sql1、$result1、$row1)

                 //讀取休假資料表 leave
			$sql1 = "SELECT * FROM `leave` ";
			$result1 = mysqli_query($link, $sql1);

                 //依序讀取 leave 資料,並加總休假天數資料 於 @$paper[d2][$i]陣列
			while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM))
			{
                          $nam=$row1[0];    //登錄姓名
                          $das=$row1[4];    //登錄休假天數
                                         //依照姓名在$paper中尋找對應記錄
                            for($i=0;$i<$k;$i++)
                              {
                                  if(@$paper[na][$i]==$nam)
                                  {
                                    @$paper[d2][$i]+=$das;
                                  }
			      }
                        }

                 //計算未休假天數、未休假奬金及備註資料(75列)
                        for($i=0;$i<$k;$i++)
                        {
                           @$paper[d2][$i]=@$paper[d1][$i]-@$paper[d2][$i];            //計算未休假天數
                           @$paper[nday][$i]=(int)(@$paper[mp][$i]/28*@$paper[d2][$i]);  //計算奬金
                  //未休假奬金不倒扣(不能為負)
                           if(@$paper[nday][$i]<0)
                           {
                             @$paper[nday][$i]=0;
                           }
                        } 
//步驟五:計算加班費
                 //讀取加班費資料表 overtime(sql2、$result2、$row2)
			$sql2 = "SELECT * FROM `overtime` ";
			$result2 = mysqli_query($link, $sql2);

                 //加班時數加總
                 //依序逐一讀取 overtime 資料,並依姓名比對將資料，再將加班時數，加總至對應的@$paper[o1][$i]陣列
			while ($row2 = mysqli_fetch_array($result2, MYSQL_NUM))
			{
                          $nam=$row2[0];    //登錄姓名
                          $das=$row2[4];    //登錄加班時數
                 //依照姓名在$paper中尋找對應記錄
                            for($i=0;$i<$k;$i++)
                              {
                                  if(@$paper[na][$i]==$nam)
                                  {
                                    @$paper[o1][$i]+=$das;
                                  }
			      }
                        } 
                 //計算加班費資料
                        for($i=0;$i<$k;$i++)
                        {
                           @$paper[opa][$i]=(int)(@$paper[mp][$i]/224*1.5*@$paper[o1][$i]+0.5);     //計算加班費
                        }                                                         

//步驟六:計算業績總額(106列)
                //讀取產品代號、售價資料表 product 之資料記錄(sql3、$result3、$row3)
			$sql3 = "SELECT `產品代號`,`單價` FROM product";
			$result3 = mysqli_query($link, $sql3);

                //設定 一維陣列 之 單價資料 $price[產品代號] 
                //依序讀取 product 資料,並轉入$price[]陣列

			while ($row3 = mysqli_fetch_array($result3, MYSQL_NUM))
			{
                          $proname=$row3[0];              //產品代號轉索引代號
                          $price[$proname]=$row3[1];      //產品單價轉置
                        }

                //讀取銷售資料表 sales 之89年銷售資料記錄(sql4、$result4、$row4)
			$sql4 = "SELECT * FROM sales where `交易年` = 89";
			$result4 = mysqli_query($link, $sql4);

                //計算各業務員之業績總額
                 //依序逐一讀取 sales 資料,並依姓名比對將資料，再將加班時數，加總至對應的@$paper[o1][$i]陣列
			while ($row4 = mysqli_fetch_array($result4, MYSQL_NUM))
			{
                          $nam=$row4[1];        //登錄姓名
                          $proname=$row4[2];    //登錄產品代號
                          $nume=$row4[3];      //登錄產品數量
                 //依照姓名在$paper中尋找對應記錄
                            for($i=0;$i<$k;$i++)
                              {
                                  if(@$paper[na][$i]==$nam)
                                  {
                                    @$paper[ttsale][$i]=@$paper[ttsale][$i]+$price[$proname]*$nume;
                                  }
			      }
                        }             

//步驟七:計算比例
                            for($i=0;$i<$k;$i++)
                              {
                                 if(@$paper[ttsale][$i]==0)
                                 {
                                   @$paper[ttsale][$i]=0;
                                   @$paper[perc][$i]="0.00";
                                 }
                                 else
                                 {
                                 $ovper=(int)(@$paper[ttsale][$i]/(@$paper[nday][$i]+@$paper[opa][$i]+@$paper[yp][$i])*100+0.5);                  //計算佔月薪比例
                                 @$paper[perc][$i]=$ovper/100;
                                 }
			      }

//列印資料型態轉換  @$paper[][] --> @$paper1[][]
                             for($i=0;$i<$k;$i++)
                              {
                                 @$paper1[na][$i]=@$paper[na][$i];
                                 @$paper1[jo][$i]=@$paper[jo][$i];
                                 @$paper1[nday][$i]=po3(@$paper[nday][$i]);
                                 @$paper1[opa][$i]=po3(@$paper[opa][$i]);
                                 @$paper1[yp][$i]=po3(@$paper[yp][$i]);
                                 @$paper1[ttsale][$i]=po3(@$paper[ttsale][$i]);
                                 @$paper1[perc][$i]=@$paper[perc][$i].":1";
                                 echo "</tr>";
         		       } 


                 //列印 成果報表 @$paper1[][]資料
                 //  標題列  
 	                  echo "<CENTER><h3><u>頂新資訊公司民國八十九年業務部門績效評比報表</u></h3>";
                 //  報表
                          echo "<table >";
                 //  報表 日期列
                          echo "<tr><td colspan='7' align='right'>民國九十二年七月二十四日</td></tr>";
                 //  報表 標題列
                          echo "<tr>";
                            echo "<td colspan='7'>";
                              echo "<table border='3' frame='hsides' rules='none'><tr>";
                                 echo "<td width='80'>員工姓名</td>";
                                 echo "<td width='100'>職稱</td>";
                                 echo "<td width='155' align='right'>未休假奬金</td>";
                                 echo "<td width='125' align='right'>加班費</td>";
                                 echo "<td width='125' align='right'>年薪資</td>";
                                 echo "<td width='125' align='right'>業績總額</td>";
                                 echo "<td width='125' align='right'>比例</td>";
                              echo "</tr></table>";
                            echo "</td>";
                          echo "</tr>";
                  //  資料設定($dep:部門代號,$mdep1:未休加總,$mdep2:加班加總,$mdep3:年薪加總,$mdep4:業績加總)    99列
                        $dep="";
                        $mdep1=0;
                        $mdep2=0;
                        $mdep3=0;
                        $mdep4=0;
                  //  各課資料
                        for($i=0;$i<$k;$i++)
                        {
                      // 判斷課別變更
                           if($dep!=@$paper[dp][$i])
                           {
                      // 列印部門加總
                             if($mdep1!=0)
                             {
                               $mdep1=po3($mdep1);
                               $mdep2=po3($mdep2);
                               $mdep3=po3($mdep3);
                               $mdep4=po3($mdep4);
                               echo "<tr><td colspan='7'>";
                                   echo "<table border='2' frame='hsides' rules='none'><tr>";
                                       echo "<td colspan='2' width='180'>部門加總</td>";
                                       echo "<td align='right' width='160'>".$mdep1."</td>";
                                       echo "<td align='right' width='125'>".$mdep2."</td>";
                                       echo "<td align='right' width='125'>".$mdep3."</td>";
                                       echo "<td align='right' width='125'>".$mdep4."</td>";
                                       echo "<td width='120'></td>";
                                   echo "</tr></table>";
                               echo "</td></tr>";
                               $mdep1=0;                //部門加總設定 
                               $mdep2=0;
                               $mdep3=0;
                               $mdep4=0;
                             }
                      //部門代號設定
                             $dep=@$paper[dp][$i] ;   
 
                      // 列印課別標題
                             if($dep=="D01")
                             {
                              echo "<tr><td colspan='7'>業務一課</td></tr>";
                             } 
                             elseif($dep=="D02")
                             {
                              echo "<tr><td colspan='7'>業務二課</td></tr>";
                             }       
                             elseif($dep=="D03")
                             {
                              echo "<tr><td colspan='7'>業務三課</td></tr>";
                             }       
                             else
                             {
                              echo "<tr><td colspan='7'>業務四課</td></tr>";
                             }       
                      //  141列
                      // 列印課別資料
                            echo "<tr>";
                              echo "<td width='80'>".@$paper1[na][$i]."</td>";
                              echo "<td width='100'>".@$paper1[jo][$i]."</td>";
                        //echo "<td width='20'>".@$paper[dp][$i]."</td>";
                              echo "<td width='150' align='right'>".@$paper1[nday][$i]."</td>";
                              echo "<td width='120' align='right'>".@$paper1[opa][$i]."</td>";
                              echo "<td width='120' align='right'>".@$paper1[yp][$i]."</td>";
                              echo "<td width='120' align='right'>".@$paper1[ttsale][$i]."</td>";
                              echo "<td width='120' align='right'>".@$paper1[perc][$i]."</td>";
                            echo "</tr>";
                        // 部門加總及總加總
                            $mdep1=$mdep1+@$paper[nday][$i];
                            $mdep2=$mdep2+@$paper[opa][$i];
                            $mdep3=$mdep3+@$paper[yp][$i];
                            $mdep4=$mdep4+@$paper[ttsale][$i]; 
                          }
                          else
                          {
                      // 列印課別資料
                            echo "<tr>";
                              echo "<td width='80'>".@$paper[na][$i]."</td>";
                              echo "<td width='100'>".@$paper[jo][$i]."</td>";
                        //echo "<td width='20'>".@$paper[dp][$i]."</td>";
                              echo "<td width='150' align='right'>".@$paper1[nday][$i]."</td>";
                              echo "<td width='120' align='right'>".@$paper1[opa][$i]."</td>";
                              echo "<td width='120' align='right'>".@$paper1[yp][$i]."</td>";
                              echo "<td width='120' align='right'>".@$paper1[ttsale][$i]."</td>";
                              echo "<td width='120' align='right'>".@$paper1[perc][$i]."</td>";

                            echo "</tr>";
                        // 部門加總及總加總
                            $mdep1=$mdep1+@$paper[nday][$i];
                            $mdep2=$mdep2+@$paper[opa][$i];
                            $mdep3=$mdep3+@$paper[yp][$i];
                            $mdep4=$mdep4+@$paper[ttsale][$i]; 

                          }
                        }


                      // 列印最後部門加總
                                   $mdep1=po3($mdep1);
                                   $mdep2=po3($mdep2);
                                   $mdep3=po3($mdep3);
                                   $mdep4=po3($mdep4);
                               echo "<tr><td colspan='7'>";
                                   echo "<table border='2' frame='hsides' rules='none'><tr>";
                                       echo "<td colspan='2' width='180'>部門加總</td>";
                                       echo "<td align='right' width='160'>".$mdep1."</td>";
                                       echo "<td align='right' width='125'>".$mdep2."</td>";
                                       echo "<td align='right' width='125'>".$mdep3."</td>";
                                       echo "<td align='right' width='125'>".$mdep4."</td>";
                                       echo "<td width='120'></td>";
                                   echo "</tr></table>";
                               echo "</td></tr>";
                      // 列印總金額(兩空白列)


                        echo "</table></center>";

//建立89年業務部門業績評比資料表(sql5、$result5、$row5)   
                        $sql5="create table `comp89`(`部門代號` varchar(9),`姓名` varchar(9),`職稱` varchar(11),`未休奬金` double,`加班費` double,`年薪資` double,`業績總額` double,`比例` varchar(9))DEFAULT CHARSET=utf8";
		        $result5 = mysqli_query($link, $sql5);

//依序輸入89年未休假奬金統計表資料(sql6、$result6、$row5)
                        for($i=0;$i<$k;$i++)
                        {
                        $data1=@$paper[dp][$i];
                        $data2=@$paper[na][$i];
                        $data3=@$paper[jo][$i];
                        $data4=@$paper[nday][$i];
                        $data5=@$paper[opa][$i];
                        $data6=@$paper[yp][$i];
                        $data7=@$paper[ttsale][$i];
                        $data8=@$paper[perc][$i];
			$sql6 = "INSERT INTO `comp89`(`部門代號`, `姓名`, `職稱`, `未休奬金`, `加班費`, `年薪資`, `業績總額`, `比例`) VALUES('$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8')";
                        $result6 = mysqli_query($link, $sql6);
                        }

//釋放employee資料表資源
			mysqli_free_result($result);			
			mysqli_free_result($result1);
			mysqli_close($link);
		?> 
	</BODY>
</HTML>
