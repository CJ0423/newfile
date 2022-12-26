<?php
////////// 接收傳送資料  ///////////////
$ship=$_POST["ship"];

//////////////////  連結資料庫系統  並 指定資料庫  //////////////////////////////
                 
   $link = mysqli_connect("localhost", "root");     //連結MYSQL資料庫系統
                 
   $db_selected = mysqli_select_db($link, "hkco");  //開啟hkco資料庫

   mysqli_query($link,"SET NAMES UTF8");

//////////////////  進行出貨註記 及 修正產品庫存量  //////////////////////////////
for($x=0;$x<count($ship);$x++)
{
        //進行資料分拆
    $data=explode(",",$ship[$x]);  //0:訂單編號,2:產品編號,3:數量

    //出貨註記
      $sql = "UPDATE ordersheet SET `出貨註記` = 'y' where `訂單編號` = '$data[0]'";
      $result3 = mysqli_query($link, $sql); 
 
    //修正產品庫存量
         ////  查詢 product 資料表中對應項目現有數量 /////////////////
           $sql="SELECT 庫存量 from product where 產品編號 = '$data[2]'";
           $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQL_BOTH);
           $num=$row['庫存量'];
           $num-=$data[3];
		mysqli_free_result($result);

        ////  在 product 資料表的對應項目中將出貨數量扣除 /////////////////       
   
           $sql = "UPDATE product SET 庫存量 = '$num' WHERE 產品編號 = '$data[2]'";

           $result = mysqli_query($link, $sql);
    
}   
echo "作業已完成";
?>