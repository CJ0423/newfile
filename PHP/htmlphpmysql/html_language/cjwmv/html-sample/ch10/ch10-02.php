<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>while 重覆結構</title>
</head>
<body>

<?php 
$in_Number=$_REQUEST[number];
$sum=0;
$a=1;  //初值設定
if ($in_Number>1){
  //while 重覆結構
  while($a<$in_Number){
	echo $a." + ";
	$sum +=$a;
	$a ++;		//變數$a遞增
  }
	echo $in_Number." = ";
	$sum += $in_Number;
	echo $sum;
}else{
	echo "<font color='red'>輸入數值< 1, 請重新輸入!</font>";
}

?>

</body>
</html>
