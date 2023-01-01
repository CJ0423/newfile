<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>require外部檔案</title>
</head>

<body>
<h2>require 外部檔案</h2>

<?php 
//載入外部檔案
require "ddfunc.inc";

$mm=8;
$dd=20;
$yy=2005;

echo "輸入的資料是 : <br/>";
echo $mm." , ".$dd." , ".$yy."<br/>";

//呼叫載入檔案中的函數
  ddcheck($mm,$dd,$yy);

//改變$dd值
echo "<p>輸入的資料是 : <br/>";
$dd=34;
echo $mm." , ".$dd." , ".$yy."<br/>";

//呼叫載入檔案中的函數
  ddcheck($mm,$dd,$yy);

?>
</body>
</html>
