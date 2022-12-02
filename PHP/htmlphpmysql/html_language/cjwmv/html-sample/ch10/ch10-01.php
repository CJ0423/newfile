<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>for 重覆結構</title>
</head>
<body>

<?php 
$in_Number=$_REQUEST[number];
$sum=0;
if ($in_Number>1){
	//for 重覆結構
	for($a=1;$a<$in_Number;$a++){
		echo $a." + ";
		$sum +=$a;
	}
		echo $in_Number." = ";
		$sum += $in_Number;
		echo $sum;
}
Else
{
	echo "<font color='red'>輸入數值<1, 請重新輸入!</font>";
}
?>

</body>
</html>
