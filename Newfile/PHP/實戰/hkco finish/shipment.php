<?php
//////////////////  連結資料庫系統  並 指定資料庫  //////////////////////////////
                 
   $link = mysqli_connect("localhost", "root");     //連結MYSQL資料庫系統
                 
   $db_selected = mysqli_select_db($link, "hkco");  //開啟hkco資料庫

   mysqli_query($link,"SET NAMES UTF8");

//////////////////  讀取已印出貨單但未做出貨註記之資料 並依客戶帳號排序 //////////////////////////////
                 
	  $sql = "SELECT * FROM ordersheet where ((`貨單列印` = 'y') and (`出貨註記` = 'n')) ORDER BY `客戶帳號` ASC";
	  $result = mysqli_query($link, $sql);
          $n=0;         
          while($rows = mysqli_fetch_row($result))
          {
             for($y=0;$y<4;$y++)   //0:訂單編號,1:客戶帳號,2:產品編號,3:數量
             {
                $data[$n][$y]=$rows[$y];
             }
             $n++;
          }

//////////////////  列印出貨記表單 //////////////////////////////

echo "<h1>出貨註記</h1>";
echo '<form method="post" action="shipment-1.php">';
echo '<table border="1">';
echo '<tr><td>訂單編號</td><td>客戶帳號</td><td>產品編號</td><td>數量</td><td>出貨註記</td></tr>';

   for($x=0;$x<$n;$x++)
   {
     echo "<tr align='center'>";
        for($y=0;$y<4;$y++)   //0:訂單編號,2:產品編號,3:數量
        {
            echo "<td>".$data[$x][$y]."</td>";
        }
     $val=$data[$x][0].",".$data[$x][1].",".$data[$x][2].",".$data[$x][3];
     echo  "<td><input type='checkbox' name='ship[]' value='".$val."'></td></tr>";
   }
   echo "<tr><td colspan='5'><input type='submit' value='送出'></td></tr></table>";
echo "</form>";
?>