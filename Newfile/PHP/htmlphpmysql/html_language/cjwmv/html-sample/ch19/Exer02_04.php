<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=big5">
		<TITLE>題組二附件4</TITLE>
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
                 //設定　二維陣列［成果報表］ $paper[$i][$j]
                 //      $i：部門數；
                 //      $j：0（部門代號），1（平均月薪資），2（平均未休假奬金），3（平均加班費），4（部門人數），5(部門名稱)。
//40 line
                 //建立 $person [$i ][$j ]陣列
                 //    $i：員工序，
                 //    $j：0（姓名），1（部門代號），2（目前月薪資），4（年假天數），5（休假天數），6（加班時數）

                 //連結MYSQL資料庫系統
			$link = mysqli_connect("localhost", "root");

                 //開啟123資料庫
			$db_selected = mysqli_select_db($link, "t123");

mysqli_query($link, "SET NAMES UTF8");
                 //讀取 dept 資料表
			$sql0 = "SELECT * FROM `dept`";
			$result0 = mysqli_query($link, $sql0);
      
                 //擷取部門代號資料
                        $k1=0;  //記錄部門資料筆數

                 //依序讀取 dept 資料,並轉入$paper[$k1][0]陣列
//60 line
			while ($row0 = mysqli_fetch_array($result0, MYSQL_NUM))
			{
                          $paper[$k1][0]=$row0[1];    //部門代號轉置
                          $paper[$k1][5]=$row0[0];    //部門代號轉置
	                  $k1++;
			}  


                 //讀取 employee 資料表業務部門人員資料
			$sql1 = "SELECT * FROM employee ";
			$result1 = mysqli_query($link, $sql1);

	         //擷取業務部門職員工基本資料(部門代號、姓名、職稱、月薪、年假天數)
                        $k=0;  //記錄員工資料筆數

                 //依序讀取 employee 資料,並轉入$paper[]陣列

			while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM))
			{
                          $person[$k][0]=$row1[0];    //姓名轉置
                          $person[$k][1]=$row1[2];    //部門代號轉置    line 80
                          $person[$k][2]=$row1[7];    //目前月薪資轉置
                          $person[$k][3]=$row1[8];    //年假天數轉置
	                  $k++;
			}                                                      



                 //讀取休假資料表 leave
			$sql2 = "SELECT * FROM `leave` ";
			$result2 = mysqli_query($link, $sql2);

                 //休假天數加總
                 //依序讀取 leave 資料,並加總$person[$k][5](休假天數資料)陣列
			while ($row2 = mysqli_fetch_array($result2, MYSQL_NUM))
			{
                          $nam=$row2[0];    //登錄姓名
                          $das=$row2[4];    //登錄休假天數
                                         //依照姓名在$person中尋找對應記錄，加總休假天數
                            for($i=0;$i<$k;$i++)
                              {
                                  if($person[$i][0]==$nam)
                                  {
                                    @$person[$i][4]+=$das;
                                  }
			      }
                        }

                 //計算 未休假奬金
                        for($i=0;$i<$k;$i++)
                        {
                           $dat=@$person[$i][3]-@$person[$i][4];            //計算未休假天數
                           $person[$i][6]=(int)($person[$i][2]/28*$dat);  //計算奬金
                 //未休假奬金不倒扣(不能為負)
                           if($person[$i][6]<0)
                           {
                             @$person[$i][6]=0;
                           }
                        }                                                             

      //讀取加班費資料表 overtime    line 120
			$sql3 = "SELECT * FROM `overtime` ";
			$result3 = mysqli_query($link, $sql3);

                 //加班時數加總
                 //依序逐一讀取 overtime 資料,並依姓名比對將資料，再將加班時數，加總至對應的$paper[o1][$i]陣列
			while ($row3 = mysqli_fetch_array($result3, MYSQL_NUM))
			{
                          $nam=$row3[0];    //登錄姓名
                          $das=$row3[4];    //登錄加班時數
                                         //依照姓名在$paper中尋找對應記錄
                            for($i=0;$i<$k;$i++)
                              {
                                  if($person[$i][0]==$nam)
                                  {
                                    @$person[$i][5]+=$das;
                                  }
			      }
                        }                                                      

                 //計算 加班費 資料       140 line
                        for($i=0;$i<$k;$i++)
                        {
                           $person[$i][7]=(int)(@$person[$i][2]/224*1.5*@$person[$i][5]+0.5);     //計算加班費
                        }                                                            

//將各員工資料(月薪、未休假奬金及加班費)，依照 部門代號 加總至 dept[][]陣列之對應欄位中
                      for($i=0;$i<$k;$i++)    //員工廻圈
                      {
                          for($j=0;$j<$k1;$j++)  //部門廻圈
                          {
                            if($paper[$j][0]==$person[$i][1])
                            {
                               $paper[$j][4]=@$paper[$j][4]+1;                   //部門人數統計
                               $paper[$j][1]=@$paper[$j][1]+$person[$i][2];     //月薪加總
                               $paper[$j][2]=@$paper[$j][2]+$person[$i][6];     //未休假奬金加總
                               $paper[$j][3]=@$paper[$j][3]+$person[$i][7];     //加班費加總
                            }
                          }
                      }
//line 160

//統計各部門之  平均月薪、平均未休假奬金  及 平均加班費
                     for($j=0;$j<$k1;$j++)
                     {
                       $paper[$j][1]=(int)($paper[$j][1]/$paper[$j][4]+0.5);
                       $paper[$j][2]=(int)($paper[$j][2]/$paper[$j][4]+0.5);
                       $paper[$j][3]=(int)($paper[$j][3]/$paper[$j][4]+0.5);
                     }        



//列印報表資料
          echo "<center><h2>頂新資訊公司各部門人事支出資料明細表</h2>";
          echo "<table border='1'><tr>";
          echo "<td>部門名稱</td><td>部門代號</td><td align='right'>平均月薪</td><td align='right'>平均未休假奬金</td><td align='right'>平均加班費</td><td align='right'>部門人數</td></tr>";
       for($j=0;$j<$k1;$j++)
       {
          echo "<tr><td>".$paper[$j][5]."</td><td>".$paper[$j][0]."</td><td align='right'>".$paper[$j][1]."</td><td align='right'>".$paper[$j][2]."</td><td align='right'>".$paper[$j][3]."</td><td align='center'>".$paper[$j][4]."</td></tr>";
       }           
          echo "</table></center>";


//建立[人事支出資料明細表-paidlist]   183列
                        $sql3="create table `paidlist`(`部門名稱` varchar(10),`部門代號` varchar(9),`平均月薪` double,`平均未休假奬金` double,`平均加班費` double,`部門人數` double)DEFAULT CHARSET=utf8";
		        $result3 = mysqli_query($link, $sql3);

//依序輸入89年未休假奬金統計表資料
                        for($i=0;$i<$k1;$i++)
                        {
                        $data1=$paper[$i][5];
                        $data2=$paper[$i][0];
                        $data3=$paper[$i][1];
                        $data4=$paper[$i][2];
                        $data5=$paper[$i][3];
                        $data6=$paper[$i][4];                
			$sql4 = "INSERT INTO `paidlist`(`部門名稱`,`部門代號`, `平均月薪`, `平均未休假奬金`, `平均加班費`, `部門人數`) VALUES('$data1','$data2','$data3','$data4','$data5','$data6')";
                        $result4 = mysqli_query($link, $sql4);
                        }

                 //釋放employee資料表資源
			mysqli_free_result($result0);			
			mysqli_free_result($result1);
			mysqli_close($link);
		?> 
	</BODY>
</HTML>
