<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=big5">
		<TITLE>題組二附件1</TITLE>
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
                 //設定　二維陣列［成果報表］ @$paper[dp,na,jo,mp,d1,d2,pa,note][0 - n]
                 // dp:部門代號、na:姓名、jo:職稱、mp:目前月薪、d1:年假天數、d2:(未)休假天數、pa:未假奬金、note:備註
           
                 //連結MYSQL資料庫系統
			$link = mysqli_connect("localhost", "root");

                 //開啟123資料庫
			$db_selected = mysqli_select_db($link, "t123");

mysqli_query($link,"SET NAMES UTF8");
                 //讀取 employee 資料表業務部門人員資料
			$sql = "SELECT * FROM employee where 部門代號 IN('D01','D02','D03','D04')";
			$result = mysqli_query($link, $sql);

	         //擷取業務部門職員工基本資料(部門代號、姓名、職稱、月薪、年假天數)
                        $k=0;  //記錄資料筆數

                 //依序讀取 employee 資料,並轉入@$paper[]陣列

			while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
			{
                          @$paper[dp][$k]=$row[2];    //部門代號轉置
                          @$paper[na][$k]=$row[0];    //姓名轉置
                          @$paper[jo][$k]=$row[1];    //職稱轉置
                          @$paper[mp][$k]=$row[7];    //目前月薪資轉置
                          @$paper[d1][$k]=$row[8];    //年假天數轉置
	                  $k++;
			}                                                      //35

                 //以課別遞增,月薪遞減，姓名筆劃遞增排序
//步驟三:依報表列印要求進行排序
array_multisort($paper["dp"],SORT_STRING,SORT_ASC,$paper["mp"],SORT_NUMERIC,SORT_DESC,$paper["na"],SORT_NUMERIC,SORT_ASC,$paper["jo"],$paper["d1"]);
/*
                 //以課別遞增排序
                         for($i=0;$i<($k-1);$i++)
                        {
                          for($j=($i+1);$j<$k;$j++)
                          {
                            if(@$paper[dp][$i]>@$paper[dp][$j])
                            {
                               $v1=@$paper[dp][$i];
                               $v2=@$paper[na][$i];
                               $v3=@$paper[jo][$i];
                               $v4=@$paper[mp][$i];
                               $v6=@$paper[d1][$i];
                                 @$paper[dp][$i]=@$paper[dp][$j];
                                 @$paper[na][$i]=@$paper[na][$j];
                                 @$paper[jo][$i]=@$paper[jo][$j];
                                 @$paper[mp][$i]=@$paper[mp][$j];
                                 @$paper[d1][$i]=@$paper[d1][$j];
                               @$paper[dp][$j]=$v1;
                               @$paper[na][$j]=$v2;
                               @$paper[jo][$j]=$v3;
                               @$paper[mp][$j]=$v4;
                               @$paper[d1][$j]=$v6;
                            }
                          }                            
                        } 
                  //部門相同,以年薪資遞減排序 
                         for($i=0;$i<($k-1);$i++)
                        {
                          for($j=($i+1);$j<$k;$j++)
                          {
                            if((@$paper[dp][$i]==@$paper[dp][$j])and(@$paper[mp][$i]<@$paper[mp][$j]))
                            {
                               $v1=@$paper[dp][$i];
                               $v2=@$paper[na][$i];
                               $v3=@$paper[jo][$i];
                               $v4=@$paper[mp][$i];
                               $v6=@$paper[d1][$i];
                                 @$paper[dp][$i]=@$paper[dp][$j];
                                 @$paper[na][$i]=@$paper[na][$j];
                                 @$paper[jo][$i]=@$paper[jo][$j];
                                 @$paper[mp][$i]=@$paper[mp][$j];
                                 @$paper[d1][$i]=@$paper[d1][$j];
                               @$paper[dp][$j]=$v1;
                               @$paper[na][$j]=$v2;
                               @$paper[jo][$j]=$v3;
                               @$paper[mp][$j]=$v4;
                               @$paper[d1][$j]=$v6;
                            }
                          }                            
                        } 

                  //部門及年薪相同,以姓名筆劃遞增排序
                         for($i=0;$i<($k-1);$i++)
                        {
                          for($j=($i+1);$j<$k;$j++)
                          {
                            if((@$paper[dp][$i]==@$paper[dp][$j])and(@$paper[mp][$i]==@$paper[mp][$j])and(@$paper[na][$i]<@$paper[na][$j]))
                            {
                               $v1=@$paper[dp][$i];
                               $v2=@$paper[na][$i];
                               $v3=@$paper[jo][$i];
                               $v4=@$paper[mp][$i];
                               $v6=@$paper[d1][$i];
                                 @$paper[dp][$i]=@$paper[dp][$j];
                                 @$paper[na][$i]=@$paper[na][$j];
                                 @$paper[jo][$i]=@$paper[jo][$j];
                                 @$paper[mp][$i]=@$paper[mp][$j];
                                 @$paper[d1][$i]=@$paper[d1][$j];
                               @$paper[dp][$j]=$v1;
                               @$paper[na][$j]=$v2;
                               @$paper[jo][$j]=$v3;
                               @$paper[mp][$j]=$v4;
                               @$paper[d1][$j]=$v6;
                            }
                          }                            
                        }
*/ 
                 //讀取休假資料表 leave
			$sql1 = "SELECT * FROM `leave` ";
			$result1 = mysqli_query($link,$sql1 );

                 //休假天數加總
                 //依序讀取 leave 資料,並加總@$paper[d2][$i]陣列
			while ($row1 = mysqli_fetch_array($result1, MYSQLI_NUM))
			{
                          $nam=$row1[0];    //登錄姓名
                          $das=$row1[4];    //登錄休假天數
                                         //依照姓名在@$paper中尋找對應記錄
                            for($i=0;$i<$k;$i++)
                              {
                                  if(@$paper[na][$i]==$nam)
                                  {
                                    @$paper[d2][$i]+=$das;
                                  }
			      }
                        }

                 //計算未休假天數、未休假奬金及備註資料
                        for($i=0;$i<$k;$i++)
                        {
                           @$paper[d2][$i]=@$paper[d1][$i]-@$paper[d2][$i];            //計算未休假天數
                           @$paper[pa][$i]=(int)(@$paper[mp][$i]/28*@$paper[d2][$i]);  //計算奬金
                  //未休假奬金不倒扣(不能為負)
                           if(@$paper[pa][$i]<0)
                           {
                             @$paper[pa][$i]=0;
                           } 
                  //設定備註資料
                           if(@$paper[d2][$i]==@$paper[d1][$i])
                           {
                              @$paper[note][$i]="未休";
                           }
                           else
                           {
                              @$paper[note][$i]="　";
                           }        
                        }                                                             //76列

                 //列印 成果報表 @$paper[][]資料
                 //  標題列  
 	                  echo "<CENTER><h3><u>頂新資訊公司民國八十九年業務部門員工未休假奬金統計報表</u></h3>";
                 //  報表
                          echo "<table >";
                 //  報表 日期列
                          echo "<tr><td colspan='7' align='right'>民國九十年一月三十一日</td></tr>";
                 //  報表 標題列
                          echo "<tr>";
                            echo "<td colspan='7'>";
                              echo "<table border='3' frame='hsides' rules='none'><tr>";
                                 echo "<td width='80'>員工姓名</td>";
                                 echo "<td width='100'>職稱</td>";
                                 echo "<td width='50' align='right'>月薪</td>";
                                 echo "<td width='90' align='right'>年假天數</td>";
                                 echo "<td width='90' align='right'>未休天數</td>";
                                 echo "<td width='100' align='right'>未休假奬金</td>";
                                 echo "<td width='50' align='center'>備註</td>";
                              echo "</tr></table>";
                            echo "</td>";
                          echo "</tr>";
                  //  資料列列印
//前置作業設定($dep:部門代號,$mdep:部門加總,$tdep:總加總)    99列
                        $dep="";
                        $mdep=0;
                        $tdep=0;
                  //  各課資料
                        for($i=0;$i<$k;$i++)
                        {
                      // 判斷課別變更
                           if($dep!=@$paper[dp][$i])
                           {
                      // 列印部門加總
                             if($mdep!=0)
                             {
                               echo "<tr><td colspan='7'>";
                                   echo "<table border='2' frame='hsides' rules='none'><tr>";
                                       echo "<td colspan='2' width='180'>部門加總</td>";
                         $mdep1=po3($mdep);
                                       echo "<td colspan='4' align='right' width='350'>".$mdep1."</td>";
                                       echo "<td width='50'></td>";
                                   echo "</tr></table>";
                               echo "</td></tr>";
                               $mdep=0;                //部門加總設定 
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
                              echo "<td width='80'>".@$paper[na][$i]."</td>";
                              echo "<td width='100'>".@$paper[jo][$i]."</td>";
                        //echo "<td width='20'>".@$paper[dp][$i]."</td>";
                              @$paper1[mp][$i]=po3(@$paper[mp][$i]);
                              echo "<td width='50' align='right'>".@$paper1[mp][$i]."</td>";
                              echo "<td width='90' align='right'>".@$paper[d1][$i]."</td>";
                              echo "<td width='90' align='right'>".@$paper[d2][$i]."</td>";
                              @$paper1[pa][$i]=po3(@$paper[pa][$i]);
                              echo "<td width='100' align='right'>".@$paper1[pa][$i]."</td>";
                              echo "<td width='50' align='center'>".@$paper[note][$i]."</td>";
                            echo "</tr>";
                        // 部門加總及總加總
                            $mdep=$mdep+@$paper[pa][$i];
                            $tdep=$tdep+@$paper[pa][$i];
                          }
                          else
                          {
                      // 列印課別資料
                            echo "<tr>";
                              echo "<td width='80'>".@$paper[na][$i]."</td>";
                              echo "<td width='100'>".@$paper[jo][$i]."</td>";
                        //echo "<td width='20'>".@$paper[dp][$i]."</td>";
                              @$paper1[mp][$i]=po3(@$paper[mp][$i]);
                              echo "<td width='50' align='right'>".@$paper1[mp][$i]."</td>";
                              echo "<td width='90' align='right'>".@$paper[d1][$i]."</td>";
                              echo "<td width='90' align='right'>".@$paper[d2][$i]."</td>";
                              @$paper1[pa][$i]=po3(@$paper[pa][$i]);
                              echo "<td width='100' align='right'>".@$paper1[pa][$i]."</td>";
                              echo "<td width='50' align='center'>".@$paper[note][$i]."</td>";
                            echo "</tr>";
                        // 部門加總及總加總
                            $mdep=$mdep+@$paper[pa][$i];
                            $tdep=$tdep+@$paper[pa][$i];

                          }
                        }


                      // 列印最後部門加總

                               echo "<tr><td colspan='7'>";
                                   echo "<table border='2' frame='hsides' rules='none'><tr>";
                                       echo "<td colspan='2' width='180'>部門加總</td>";
                         $mdep1=po3($mdep);
                                       echo "<td colspan='4' align='right' width='350'>".$mdep1."</td>";
                                       echo "<td width='50'></td>";
                                   echo "</tr></table>";
                               echo "</td></tr>";
                      // 列印總金額(兩空白列)
                            echo "<tr><td>　</td></tr>";
                            echo "<tr><td>　</td></tr>";
 
                              echo "<tr><td colspan='7'>";
                                   echo "<table border='2' frame='hsides' rules='none'><tr>";
                                       echo "<td colspan='2' width='180'>未休假奬金總計金額</td>";
                         $tdep1=po3($tdep);
                                       echo "<td colspan='4' align='right' width='350'>".$tdep1."</td>";
                                       echo "<td width='50'></td>";
                                   echo "</tr></table>";
                               echo "</td></tr>";

                        echo "</table></center>";

//建立89年未休假奬金統計表   201列
                        $sql3="create table `lea89`(`部門代號` varchar(9),`姓名` varchar(9),`職稱` varchar(11),`目前月薪` double,`年假天數` double,`未休天數` double,`未休奬金` double,`備註` varchar(9))ENGINE=MyISAM DEFAULT CHARSET=utf8";
		        $result3 = mysqli_query($link, $sql3);

//依序輸入89年未休假奬金統計表資料
                        for($i=0;$i<$k;$i++)
                        {
                        $data1=@$paper[dp][$i];
                        $data2=@$paper[na][$i];
                        $data3=@$paper[jo][$i];
                        $data4=@$paper[mp][$i];
                        $data5=@$paper[d1][$i];
                        $data6=@$paper[d2][$i];
                        $data7=@$paper[pa][$i];
                        $data8=@$paper[note][$i];
			$sql4 = "INSERT INTO `lea89`(`部門代號`, `姓名`, `職稱`, `目前月薪`, `年假天數`, `未休天數`, `未休奬金`, `備註`) VALUES('$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8')";
                        $result4 = mysqli_query($link,$sql4 );
                        }
                 //釋放employee資料表資源
			mysqli_free_result($result);			
			mysqli_free_result($result1);
			mysqli_close($link);
		?> 
	</BODY>
</HTML>
