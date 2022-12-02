<?php
//////////////////  連結資料庫系統  並 指定資料庫  //////////////////////////////
                 
   $link = mysqli_connect("localhost", "root");     //連結MYSQL資料庫系統
                 
   $db_selected = mysqli_select_db($link, "hkco");  //開啟hkco資料庫

   mysqli_query($link,"SET NAMES UTF8");

//////////////////  讀取出貨貨註記為 'y' 之資料 並依客戶帳號排序 //////////////////////////////
                 
	  $sql = "SELECT * FROM ordersheet where `出貨註記` = 'y' ORDER BY `客戶帳號` ASC";
	  $result = mysqli_query($link, $sql);
          $n=0;         
          while($rows = mysqli_fetch_row($result))
          {
             for($y=0;$y<6;$y++)            //0:訂單編號,1:客戶帳號,2:產品編號,3:數量
             {                              //4:單價,5:訂購時間
                $data[$n][$y]=$rows[$y];
             }
             $n++;
          }
//////////////////  列印銷售確認表單 //////////////////////////////

echo "<h1>銷售確認表</h1>";
echo '<form method="post" action="salesheet-1.php">';
echo '<table border="1">';
echo '<tr><td>訂單編號</td><td>客戶帳號</td><td>產品編號</td><td>數量</td><td>單價</td><td>訂購時間</td><td>銷售確認</td></tr>';

   for($x=0;$x<$n;$x++)
   {
     echo "<tr align='center'>";
        $val="";
        for($y=0;$y<6;$y++)   //0:訂單編號,2:產品編號,3:數量
        {
            echo "<td>".$data[$x][$y]."</td>";
            $val.=$data[$x][$y].",";
        }
     echo  "<td><input type='checkbox' name='ship[]' value='".$val."'></td></tr>";
   }
   echo "<tr><td colspan='7'><input type='submit' value='送出'></td></tr></table>";
echo "</form>";




?>