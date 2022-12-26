<?php
// 這邊將會抓取資料庫中的資料，並且讓資料庫的資料進行同步，但是如果沒有資料的話就會什麼都沒有喔。這倒是有點困擾是吧

//////////////////  連結資料庫系統  並 指定資料庫  //////////////////////////////
                 
   $link = mysqli_connect("localhost", "root");     //連結MYSQL資料庫系統
                 
   $db_selected = mysqli_select_db($link, "hkco");  //開啟hkco資料庫

   mysqli_query($link,"SET NAMES UTF8");

//////////////////  讀取未列印出貨單之訂購單資料 並依客戶帳號排序 //////////////////////////////
                 
	  $sql = "SELECT * FROM ordersheet where `貨單列印` = 'n' ORDER BY `客戶帳號` ASC";
	  $result = mysqli_query($link, $sql);
          $n=0;         
          while($rows = mysqli_fetch_row($result))
          {
             for($y=0;$y<5;$y++)
             {
                $data[$n][$y]=$rows[$y];
             }
             $n++;
          }

//////////////////  依客戶帳號列印出貨單  //////////////////////////////
       $userid="";
       
       for($x=0;$x<$n;$x++)
       {
          //判斷客戶帳號是否已變更
          if($data[$x][1]!=$userid)
          {
            //列印出貨單結尾資料
            if($userid!="")
            {
               echo "<tr><td colspan='5' align='right'>總計：".$totalpay."元</td></tr>";
               echo "<tr><td colspan='5'>";
               echo "<table border='1'><tr><td height='50'>　業務姓名：</td><td>　陳大同：</td><td>　客戶簽章：</td><td width='200'></td></tr></table>";
               echo "</td></tr></table><br><br><br><br>";
            }

            //變更客戶帳號
             $userid=$data[$x][1];   
              //讀取客戶個人資料
	     $sql2 = "SELECT * FROM userdata where `帳號` = '".$userid."'";
	     $result2 = mysqli_query($link, $sql2);             
             $rows = mysqli_fetch_row($result2);
                $username=$rows[1];
                $usersex=$rows[2];
                $usertel=$rows[4];
                $userad1=$rows[6];
                $userad2=$rows[7];
             
             //列印出貨單客戶資料
           echo "<table border='1'><tr><td colspan='5'>";
             echo "<table border='1'><tr>";
             echo "<td>客<br>戶<br>姓<br>名</td><td><font size='5'>".$username."</td>";
             echo "<td>客<br>戶<br>住<br>址</td><td><font size='5'>".$userad1.$userad2."</td>";
             echo "<td>客<br>戶<br>電<br>話</td><td><font size='5'>".$usertel."</td>";
             echo "</tr></table>";
           echo "</td></tr>";
           echo "<tr><td>訂單編號</td><td>產品編號</td><td>數量</td><td>單價</td><td>總價</td>";
           $totalpay=0;
          }
         //////////  列印出貨單資料  ///////////////////////
          echo "<tr><td>".$data[$x][0]."</td>"; 
          echo "<td>".$data[$x][2]."</td>";        
          echo "<td>".$data[$x][3]."</td>";
          echo "<td>".$data[$x][4]."</td>";
          echo "<td>".$data[$x][3]*$data[$x][4]."</td></tr>";
          $totalpay+=$data[$x][3]*$data[$x][4];

            //列印最後一位客戶出貨單結尾資料
            if($x==($n-1))
            {
               echo "<tr><td colspan='5' align='right'>總計：".$totalpay."元</td></tr>";
               echo "<tr><td colspan='5'>";
               echo "<table border='1'><tr><td height='50'>　業務姓名：</td><td>　陳大同：</td><td>　客戶簽章：</td><td width='200'></td></tr></table>";
               echo "</td></tr></table><br><br><br><br>";
            }         
      }
///////////// 貨單列印註記  //////////////////////////////////
       for($x=0;$x<$n;$x++)
       {
             $note=$data[$x][0];
             $sql3 = "UPDATE ordersheet SET `貨單列印` = 'y' where `訂單編號` = '$note'";
	     $result3 = mysqli_query($link, $sql3); 
       }


mysqli_free_result($result);
mysqli_free_result($result2);

?>