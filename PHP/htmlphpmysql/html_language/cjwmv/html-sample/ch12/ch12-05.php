<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>不同進位方式的轉換</title></title>
</head>
<body>
<h2>不同進位方式的轉換</h2>

<?php 
//取得表單傳遞過來的數值
$numb=$_POST[number];
echo "輸入的十進位資料 => ".$numb."<p>";

//判斷輸入的是否是數值資料
if(is_numeric($numb)){
	echo "轉成二進位表示 => ".base_convert($numb,10,2)."<p>";
	echo "轉成八進位表示 => ".decoct($numb)."<p>";
	echo "轉成十六進位表示 => ".dechex($numb)."<p>";
}else{
	echo "<font color='red'>所輸入的不是數值資料請重新輸入!</font>";
}
?>

</body>
</html>
