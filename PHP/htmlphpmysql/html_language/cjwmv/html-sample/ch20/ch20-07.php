<?php
   echo "目前資料夾位置:<br>".getcwd()."<p>";
   echo "目前資料夾之上層資料夾位置:<br>".dirname(getcwd())."<p>";   
   chdir("c:\\xampp\\htdocs\\test");      //轉換工作資料夾
   echo "轉換後資料夾位置:<br>".getcwd()."<p>";  
?>