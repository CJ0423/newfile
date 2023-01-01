<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>比較運算子</title>
</head>
<body>
<h2>比較運算子</h2>

<?php 
$a=12.33;
$b=566;		//整數變數
$c="566";	//字串變數
echo "\$a = ".$a."<br>";
echo "\$b = ".$b."<br>";
echo "\$c = ".$c."<br><hr>";

echo "<font color='purple'>";

if($a<$b){
	echo "\$a 小於 \$b <br>";
}else{
	echo "\$a 大於 \$b <br>";
}

if($b==$c){
	echo "\$b 等於 \$c <br>";
}else{
	echo "\$b 不等於 \$c <br>";
}

if($b===$c){
	echo "\$b 等於 \$c 且資料型態相同 <br>";
}else{
	echo "\$b 不等於 \$c 或資料型態不相同 <br>";
}

?>

</body>
</html>
