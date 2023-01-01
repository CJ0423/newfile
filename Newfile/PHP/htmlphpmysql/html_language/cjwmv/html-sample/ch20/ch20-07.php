<?php
   echo "目前資料夾位置:<br>".getcwd()."<p>";
   echo "目前資料夾之上層資料夾位置:<br>".dirname(getcwd())."<p>";   
   chdir("c:\\xampp\\htdocs\\110-att");      //轉換工作資料夾，簡單來說就是，我們現在走入倉庫中的110-att的位置。
   echo "轉換後資料夾位置:<br>".getcwd()."<p>"; 
   
  
?>