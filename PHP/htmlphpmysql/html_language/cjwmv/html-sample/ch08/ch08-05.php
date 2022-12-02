<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>使用變數</title>
</head>
<body>

<?php 
$text_string="這是字串資料";	//字串資料要以"或'括起來
$AA=10;
$aa=(2+3)*12;		// $AA和$aa是不同的變數
$BB=168;

echo $text_string."<br>";	
//要顯示$所以使用跳脫字元 \$
echo "\$AA =".$AA."<br>";	
echo "\$aa = ".$aa."<br>";
echo "\$BB = ".$BB."<br>";
echo "<hr>";

//設定變數之間的參考,$AA和$BB兩個變數會互相影響
$AA=&$BB;	
echo "變數參考後......<br>";
echo "\$AA = ".$AA."<br>";
echo "\$BB = ".$BB."<br>";
$AA=1000;
echo "<b>\$AA變數值</b>改變後......<br>";
echo "\$AA = ".$AA."<br>";
echo "\$BB = ".$BB."<br>";
$BB=666;
echo "<b>\$BB變數值</b>改變後......<br>";
echo "\$AA = ".$AA."<br>";
echo "\$BB = ".$BB."<br>";
?>

</body>
</html>
