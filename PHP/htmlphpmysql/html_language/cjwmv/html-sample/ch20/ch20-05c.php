﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>路徑資料</title>
</head>
<body>

<?php 
//指定兩個路徑字串
$file1="word.txt";
$file2="http://localhost/guestbook/sample.htm";

//顯示檔案的絕對路徑
  echo $file1."的絕對路徑是  <br>".realpath($file1)."<p>";
  
//顯示檔案路徑的相關資料
  echo "另一個路徑字串是  <br>".$file2."<p>";
  echo "檔案名稱是 -> ".basename($file2)."<br>";
  echo "路徑名稱是 -> ".dirname($file2)."<p>";
  
  echo "pathinfo()函數傳回的陣列資料如下...<br>";
  $arr=pathinfo($file2);
  echo "<hr>";
  echo "路徑名稱是 -> ".$arr['dirname']."<br>";
  echo "檔案名稱是 -> ".$arr['basename']."<br>";
  echo "副檔名是 -> ".$arr['extension']."<br>";
?>

</body>
</html>
