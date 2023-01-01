<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>傳值呼叫</title>
</head>
<body>
<h2>傳值呼叫</h2>

<?php 
$x=33;
$y=66;
echo "原始\$x 和\$y 變數: <br/>";
echo "\$x=".$x."<br/>";
echo "\$y=".$y."<br/>";

function swap($a,$b)
{//兩個資料交換
	$temp=$a;
	$a=$b;
	$b=$temp;
	echo "\$a=".$a."<br/>";
	echo "\$b=".$b."<br/>";
}
//以Call By Value 呼叫swap函數
echo "<p>以Call By Value 呼叫 swap函數<br/>";
swap($x,$y);

echo "<p>呼叫函數後的 \$x 和 \$y 變數: <br/>";
echo "\$x=".$x."<br/>";
echo "\$y=".$y."<br/>";
?>

</body>
</html>
