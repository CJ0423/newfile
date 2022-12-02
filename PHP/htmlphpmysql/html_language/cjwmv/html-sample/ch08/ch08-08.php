<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>算術運算子</title>
</head>
<body>

<?php 

$a=5*4+3;	//$a的值經運算後是23
$b=20%3;	//$b的值經運算後是2
echo "原始 \$a 的值 = <b>".$a."</b><br>";  // . 為資料連接符號
//$a的值先加1再傳回
echo "++\$a 的值 = <b>".++$a."</b><br>";
	
echo "<p>原始 \$b 的值 = <b>".$b."</b><br>";
//先傳回$b的值再做加1的動作
echo "\$b++ 的值 = <b>".$b++."</b><br>";	
echo "最後 \$b 的值 = <b>".$b."</b>";

?>
</body>
</html>
