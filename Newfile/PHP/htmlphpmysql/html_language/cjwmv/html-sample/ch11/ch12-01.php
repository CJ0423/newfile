<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>常用數學函數</title>
</head>

<body>

<?php
//原始數值
$nm=-123.456;
echo "原數值 = ".$nm."<br/>";
$nm=abs($nm);
$nm=round($nm,2);
echo "取絕對值和四捨五入小數取二位 => ".$nm;

echo "<p>亂數產生陣列值 : <br/>";

for($a=0;$a<10;$a++){
	//以亂數產生10筆陣列值(0~1000)
	$arr[$a]=rand(0,1000);
	//顯示陣列元素
	echo "\$arr[$a] => ".$arr[$a]."<br/>";
}

echo "</p><p>陣列最大值 : ".max($arr)."<br/>";
echo "陣列最小值 : ".min($arr);
?> 

</body>
</html>
