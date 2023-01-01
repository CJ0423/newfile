<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>include外部檔案</title>
</head>
<body>
<h2>include外部檔案</h2>

<?php 
//載入外部檔案
include "funs.inc";

$x=566;
$y=128;
echo "輸入的資料是 : ".$x." , ".$y."<p>";

//呼叫函式庫中的函數
 echo "平均值 => ".average($x,$y)."<p>"; 
 echo "總計是 => ".sum($x,$y);
?>

</body>
</html>
