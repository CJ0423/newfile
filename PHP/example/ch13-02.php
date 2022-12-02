<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>區域變數與全域變數</title>
</head>
<body>
<h2>區域變數與全域變數</h2>

<?php 
$a="Hello!";		//全域變數

//自訂沒有傳回值的函數
function sayhello()
{
	$b="Holiday";		//區域變數
	global $a;			//使用全域變數一定藥用global
	echo $b."<br/>";
	echo "--- ".$a."!!!";
}

echo $a."<p>";

//呼叫自訂函數
  sayhello();
?>

</body>
</html>

