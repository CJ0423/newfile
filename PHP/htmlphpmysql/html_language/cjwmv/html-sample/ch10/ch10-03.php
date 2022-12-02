<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>do...while 重覆結構</title>
</head>
<body>

<?php 
$in_Number=$_REQUEST[number];
$sum=0;
$a=1;
if(($in_Number>1) && ($in_Number%2!=0)){
	//do...while重覆結構
  do{	
	echo $a." + ";
	$sum +=$a;
	$a +=2;		//變數$a遞增2
  }while($a<$in_Number);
  
	echo $in_Number." = ";
	$sum += $in_Number;
	echo $sum;
	
}else{
	echo "<font color='red'>所輸入的數值小於3,或不是奇數,請重新輸入!</font>";
}
?>

</body>
</html>
