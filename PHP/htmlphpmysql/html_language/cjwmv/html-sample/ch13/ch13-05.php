<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>傳址呼叫</title>
</head>
<body>
<h2>傳址呼叫</h2>
<?php 
$x=33;
$y=66;
echo "原始\$x 和\$y 變數: <br/>";
echo "\$x=".$x."<br/>";
echo "\$y=".$y."<br/>";
// 傳址呼叫的概念，他會將資料整個送過去，包括記憶體位置，也就是說他等於是把整個原始資料交給對方，倘若這個資料被改變，那麼原始的資料也將一起改變，這算是一個讓函數，透過函數去省下global的方法。
function swap(&$a,&$b)
{//兩個資料交換
	$temp=$a;
	$a=$b;
	$b=$temp;
	echo "\$a=".$a."<br/>";
	echo "\$b=".$b."<br/>";
}
//以Call By Reference 呼叫swap函數
echo "<p>以Call By Reference 呼叫 swap函數<br/>";
swap($x,$y);

echo "<p>呼叫函數後的 \$x 和 \$y 變數: <br/>";
echo "\$x=".$x."<br/>";
echo "\$y=".$y."<br/>";
?>
</body>
</html>
