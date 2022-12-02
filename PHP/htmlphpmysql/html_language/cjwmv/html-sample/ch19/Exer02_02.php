<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=big5">
		<TITLE>題組二附件2</TITLE>
	</HEAD>
	<BODY>
		<?php
                       //設定數字顯示為 99,999,999之型態函數
                               function po3($a)
                               {
                                  $t=$a;
                                  $an="";
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
              /*  設定　二維陣列［成果報表］ @$paper1["dp",na,jo,mp,o1,opa,ope][0 - n]
                  dp:部門代號、na:姓名、jo:職稱、mp:月薪、o1:加班時數、opa:加班費、ope:佔月薪比例
                  [0 - n]為人數

                  設定　二維陣列［加班時數摘要］ @$paper2[dp1,dp2,dp3][0 - 6]
                  dp1:研發一課,dp2:研發二課,dp3:研發三課,dt:小計
                  [0 - 6]: 0-助理工程師 1-研發工程師 2-研發副理 3-研發經理 4-副工程師 5-資深工程師 6-部門總計
              */

                 //連結MYSQL資料庫系統
			$link = mysqli_connect("localhost", "root");

                 //開啟123資料庫
			$db_selected = mysqli_select_db($link, "t123");

mysqli_query($link,"SET NAMES UTF8");
                 //讀取 employee 資料表中研發部門人員資料
			$sql = "SELECT * FROM employee where 部門代號 like 'c%'";
			$result = mysqli_query($link, $sql);

	         //擷取研發部門職員工基本資料(部門代號、姓名、職稱、月薪)
                        $k=0;  // $k 變數記錄資料筆數

                 //依序讀取 employee 資料,並轉入$paper[]陣列

			while ($row = mysqli_fetch_array($result, MYSQL_NUM))
			{
                          @$paper1[dp][$k]=$row[2];    //部門代號轉置
                          @$paper1[na][$k]=$row[0];    //姓名轉置
                          @$paper1[jo][$k]=$row[1];    //職稱轉置
                          @$paper1[mp][$k]=$row[7];    //目前月薪資轉置
                          $k++;
			}                                                      //40列

                 //以部門遞增,月薪遞減，姓名筆劃遞增排序
array_multisort($paper1["dp"],SORT_STRING,SORT_ASC,$paper1["mp"],SORT_NUMERIC,SORT_DESC,$paper1["na"],SORT_NUMERIC,SORT_ASC,$paper1["jo"]);

                 //讀取加班費資料表 overtime
			$sql1 = "SELECT * FROM `overtime` ";
			$result1 = mysqli_query($link, $sql1);

                 //加班時數加總
                 //依序逐一讀取 overtime 資料,並依姓名比對將資料，再將加班時數，加總至對應的$paper[o1][$i]陣列
			while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM))
			{
                          $nam=$row1[0];    //登錄姓名
                          $das=$row1[4];    //登錄加班時數
                                         //依照姓名在$paper中尋找對應記錄
                            for($i=0;$i<$k;$i++)
                              {
                                  if(@$paper1[na][$i]==$nam)
                                  {
                                    @$paper1[o1][$i]+=$das;
                                  }
			      }
                        }                                                       

                 //計算加班費、佔月薪比例(%)資料
                        for($i=0;$i<$k;$i++)
                        {
                           @$paper1[opa][$i]=(int)(@$paper1[mp][$i]/224*1.5*@$paper1[o1][$i]+0.5);     //計算加班費
                           $ovper=(int)(@$paper1[opa][$i]/@$paper1[mp][$i]*10000+0.5);                  //計算佔月薪比例
                           @$paper1[ope][$i]=$ovper/100;                                             //取小數點後2位        
                        }                                                            

                 //列印 成果報表 @$paper1[][]資料
                 //  標題列  
 	                  echo "<CENTER><h3><u>頂新資訊公司民國八十九年研發部門員工加班費支領統計清冊</u></h3>";
                 //  報表
                          echo "<table >";
                 //  報表 日期列
                          echo "<tr><td colspan='7' align='right'>民國九十二年七月二十四日</td></tr>";
                 //  報表 標題列
                          echo "<tr>";
                            echo "<td colspan='6'>";
                              echo "<table border='3' frame='hsides' rules='none'><tr>";
                                 echo "<td width='80'>員工姓名</td>";
                                 echo "<td width='100'align='center'>職稱</td>";
                                 echo "<td width='70' align='right'>月薪</td>";
                                 echo "<td width='100' align='right'>加班時數</td>";
                                 echo "<td width='70' align='right'>加班費</td>";
                                 echo "<td width='115' align='right'>佔月薪比例</td>";
                              echo "</tr></table>";
                            echo "</td>";
                          echo "</tr>";
                  //  資料設定($dep:部門代號,$mdep:部門加總,$tdep:總加總)    
                        $dep="";
                        $mdep=0;
                        $tdep=0;
                  //  各課資料                                               99列
                        for($i=0;$i<$k;$i++)
                        {
                      // 判斷課別變更
                           if($dep!=@$paper1[dp][$i])
                           {
                      // 列印部門加總
                             if($mdep!=0)
                             {
                               echo "<tr><td colspan='6'>";
                                   echo "<table border='2' frame='hsides' rules='none'><tr>";
                                       echo "<td colspan='2' width='180'>部門加總</td>";
                           $mdep1=po3($mdep);
                                       echo "<td colspan='4' align='right' width='253'>".$mdep1."</td>";
                                       echo "<td width='117'></td>";
                                   echo "</tr></table>";
                               echo "</td></tr>";
                               $mdep=0;                //部門加總設定 
                             }
                      //部門代號設定
                             $dep=@$paper1[dp][$i] ;   
 
                      // 列印課別標題
                             if($dep=="C01")
                             {
                              echo "<tr><td colspan='6'>研發一課</td></tr>";
                             } 
                             elseif($dep=="C02")
                             {
                              echo "<tr><td colspan='6'>研發二課</td></tr>";
                             }       
                             else
                             {
                              echo "<tr><td colspan='6'>研發三課</td></tr>";
                             }       

                      //  134列
                      // 列印課別資料
                            if(@$paper1[opa][$i]!=0)     //加班費為0者不印出
                            {
                            echo "<tr>";
                              echo "<td width='80'>".@$paper1[na][$i]."</td>";
                              echo "<td width='100'>".@$paper1[jo][$i]."</td>";
                        //echo "<td width='20'>".@$paper1[dp][$i]."</td>";
                           @$paper2[mp][$i]=po3(@$paper1[mp][$i]);
                              echo "<td width='70' align='right'>".@$paper2[mp][$i]."</td>";
                              echo "<td width='85' align='right'>".@$paper1[o1][$i]."</td>";
                           @$paper2[opa][$i]=po3(@$paper1[opa][$i]);
                              echo "<td width='70' align='right'>".@$paper2[opa][$i]."</td>";
                              echo "<td width='110' align='right'>".@$paper1[ope][$i]."%</td>";
                             echo "</tr>";
                        // 部門加總及總加總
                            $mdep=$mdep+@$paper1[opa][$i];
                            $tdep=$tdep+@$paper1[opa][$i];
                            }
                          }
                          else
                          {
                      // 列印課別資料
                            if(@$paper1[opa][$i]!=0)     //加班費為0者不印出
                            {
                            echo "<tr>";
                              echo "<td width='80'>".@$paper1[na][$i]."</td>";
                              echo "<td width='100'>".@$paper1[jo][$i]."</td>";
                        //echo "<td width='20'>".$paper[dp][$i]."</td>";
                           @$paper2[mp][$i]=po3(@$paper1[mp][$i]);
                              echo "<td width='70' align='right'>".@$paper2[mp][$i]."</td>";
                              echo "<td width='85' align='right'>".@$paper1[o1][$i]."</td>";
                           @$paper2[opa][$i]=po3(@$paper1[opa][$i]);
                              echo "<td width='70' align='right'>".@$paper2[opa][$i]."</td>";
                              echo "<td width='110' align='right'>".@$paper1[ope][$i]."%</td>";
                             echo "</tr>";
                        // 部門加總及總加總
                            $mdep=$mdep+@$paper1[opa][$i];
                            $tdep=$tdep+@$paper1[opa][$i];
                            }
                          }
                        }               //171列

                      // 列印最後部門加總

                               echo "<tr><td colspan='6'>";
                                   echo "<table border='2' frame='hsides' rules='none'><tr>";
                                       echo "<td colspan='2' width='180'>部門加總</td>";
                                 $mdep1=po3($mdep);
                                       echo "<td colspan='3'width='253' align='right'>".$mdep1."</td>";
                                       echo "<td width='117'>"."　"."</td>";
                                    echo "</tr></table>";
                               echo "</td></tr>";
                      // 列印總金額(兩空白列)
             
                              echo "<tr><td colspan='6'>";
                                   echo "<table border='2' frame='hsides' rules='none'><tr>";
                                       echo "<td colspan='2' width='180'>加班費總計金額</td>";
                                  $tdep1=po3($tdep);
                                       echo "<td colspan='3' align='right' width='253'>".$tdep1."</td>";
                                       echo "<td width='117'>"."　"."</td>";
                                    echo "</tr></table>";
                               echo "</td></tr>";

                        echo "</table>";
//附表：加班時數摘要
//@$paper2[ ] [ ]先設為０
            for($j=0;$j<7;$j++)
            {
              @$paper2[dp1][$j]=0;
              @$paper2[dp2][$j]=0;
              @$paper2[dp3][$j]=0;
              @$paper2[dt][$j]=0; 
            }          
                         for($i=0;$i<$k;$i++)   //逐筆統計
                        { 
                          //判斷部門代號
                          if(@$paper1[dp][$i]=="C01")
                          {
                            $a="dp1";
                          }
                          elseif(@$paper1[dp][$i]=="C02")
                          {
                            $a="dp2";
                          }
                          else
                          {
                            $a="dp3";
                          }            

                          //判斷職稱      210列
                           if(@$paper1[jo][$i]=="助理工程師")
                          {
                            $b="0";
                          }
                          elseif(@$paper1[jo][$i]=="研發工程師")
                          {
                            $b="1";
                          }
                          elseif(@$paper1[jo][$i]=="研發副理")
                          {
                            $b="2";
                          } 
                          elseif(@$paper1[jo][$i]=="研發經理")
                          {
                            $b="3";
                          }
                          elseif(@$paper1[jo][$i]=="副工程師")
                          {
                            $b="4";
                          }
                          elseif(@$paper1[jo][$i]=="資深工程師")
                          {
                            $b="5";
                          }                 //234列
                         //計算加班時數報表@$paper2[][]資料
                          @$paper2[$a][$b]=@$paper2[$a][$b]+@$paper1[o1][$i];   //部門職稱小計
                          @$paper2[dt][$b]=@$paper2[dt][$b]+@$paper1[o1][$i];   //職稱小計
                          @$paper2[$a][6]=@$paper2[$a][6]+@$paper1[o1][$i];    //部門小計
                          @$paper2[dt][6]=@$paper2[dt][6]+@$paper1[o1][$i];    //總計                                                           
                        }

            //列印附表:加班時數摘要
                         echo "<br><br>";
                         echo "<table><tr>";
                         echo "<td>附表:加班時數摘要</td></tr>";
                         echo "<tr><td>";
                           echo "<table border='2' frame='hsides' rules='none'><tr>";  //第一列標題列
                           echo "<td align='center' valign='middle' width='100'>部門名稱</td>";
                           echo "<td align='center' valign='middle' width='60'>助理<br>工程師</td>";
                           echo "<td align='center' valign='middle' width='60'>研發<br>工程式</td>";
                           echo "<td align='center' valign='middle' width='60'>研發<br>副理</td>";
                           echo "<td align='center' valign='middle' width='60'>研發<br>經理</td>";
                           echo "<td align='center' valign='middle' width='60'>副工<br>程師</td>";
                           echo "<td align='center' valign='middle' width='60'>資深<br>工程師</td>";
                           echo "<td align='center' valign='middle' width='60'>總計</td>";
                           echo "</tr></table>"; 
                         echo "</td></tr>";
                         echo "<tr><td>";
                           echo "<table border='0' rules='none'>";    //第二列資料列       259列
                           for($i=0;$i<3;$i++)
                           {
                             if($i==0)
                             {
                               $dpna="研發一課";
                               $a="dp1";
                             }
                             elseif($i==1)
                             {
                               $dpna="研發二課";
                               $a="dp2";
                             }
                             else
                             {
                               $dpna="研發三課";
                               $a="dp3";
                             }
                           echo "<tr>";  
                           echo "<td align='center' valign='middle' width='100'>".$dpna."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[$a][0]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[$a][1]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[$a][2]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[$a][3]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[$a][4]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[$a][5]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[$a][6]."</td>";
                           echo "</tr>";                             //289列
                          }
                           echo "</table>"; 
                         echo "</td></tr>";
                         echo "<tr><td>";
                           echo "<table border='2' frame='hsides' rules='none'><tr>";  //第三列小計列
                           echo "<td width='100' align='center'>小計</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[dt][0]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[dt][1]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[dt][2]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[dt][3]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[dt][4]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[dt][5]."</td>";
                           echo "<td align='center' valign='middle' width='60'>".@$paper2[dt][6]."</td>";
                           echo "</tr></table>";
                         echo "</td></tr>";
                         echo "</table></center>";      

//建立89年加班費統計表   304列
                        $sql3="create table `ovet89`(`部門代號` varchar(9),`姓名` varchar(9),`職稱` varchar(11),`目前月薪` double,`加班時數` double,`加班費` double,`佔月薪比例` double)DEFAULT CHARSET=utf8";
		        $result3 = mysqli_query($link, $sql3);

//依序輸入89年加班費統計表資料

                        for($i=0;$i<$k;$i++)
                        {
                        $data1=@$paper1[dp][$i];
                        $data2=@$paper1[na][$i];
                        $data3=@$paper1[jo][$i];
                        $data4=@$paper1[mp][$i];
                        $data5=@$paper1[o1][$i];
                        $data6=@$paper1[opa][$i];
                        $data7=@$paper1[ope][$i];
                	$sql4 = "INSERT INTO `ovet89`(`部門代號`, `姓名`, `職稱`, `目前月薪`, `加班時數`, `加班費`, `佔月薪比例`) VALUES('$data1','$data2','$data3','$data4','$data5','$data6','$data7')";
                        $result4 = mysqli_query($link, $sql4);
                        }

                 //釋放employee資料表資源
			mysqli_free_result($result);			
			mysqli_free_result($result1);
			mysqli_close($link);
		?> 
	</BODY>
</HTML>
