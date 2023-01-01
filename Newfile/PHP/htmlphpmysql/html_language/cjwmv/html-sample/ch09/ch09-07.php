<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>switch...case</title>
</head>

<body>
<?php 
//讀取消費總額total中的資料,並指定給$total變數
$total=$_REQUEST[total];
echo "<h3><font color='blue'>您的消費總金額： ".$total." 元</font></h3>";
$A=$total/1000;

if($A>=10){
	echo "享有 <b>七折</b> ,請付 ".$total*0.7." 元";
}else{
//switch...case結構
	switch((int)$A){	//強制將變數$A轉成整數
	case 9:
	case 8:
	case 7:
	case 6:
	case 5:
		echo "享有 <b>八折</b> ,請付 ".$total*0.8." 元";
		break;
	case 4:
	case 3:
		echo "享有 <b>九折</b> ,請付 ".$total*0.9." 元";
		break;
	default:
		echo "沒有折扣,請付 ".$total." 元";
	}
}

?>


</body>
</html>
