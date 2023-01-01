<?php
//////////////////  連結資料庫系統  並 指定資料庫  //////////////////////////////
                 
   $link = mysqli_connect("localhost", "root");     //連結MYSQL資料庫系統
                 
   $db_selected = mysqli_select_db($link, "hkco");  //開啟hkco資料庫

   mysqli_query($link,"SET NAMES UTF8");


$query = "SHOW CREATE TABLE ordersheet";
       $result = mysqli_query($link, $query);
       @$row = mysqli_fetch_row($result);
echo $row[1];
?>