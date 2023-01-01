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
	global $a;			//使用全域變數 失去的區域函數將無法讀取全域變數系統報錯。
	echo $b."<br/>";
	echo "--- ".$a."!!!";
	$a="胖";
}

echo $a."<p>";
echo $a."<p>";
//呼叫自訂函數
  sayhello();
  echo $a."<p>";
// 用了global其實就和傳旨呼叫一樣倘若在函數內被修改，那麼原始的資料也將被修改過去喔！！
?>

</body>
</html>

