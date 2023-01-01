<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>消費折扣</title>
</head>

<body>
<?php 
//讀取消費總額total中的資料,並指定給$total變數
$total=$_POST["total"];	
echo "<h3><font color='blue'>您的消費總金額： ".$total." 元</font></h3>";

//if...elseif...else 結構
if($total>=10000)
{
	echo "金額大於 <b>10000</b> ，享有 <b>七折</b> 優惠！";
}
elseif($total>=5000)
{
	echo "金額大於 <b>5000</b>，享有 <b>八折</b> 優惠！";
}
elseif($total>=3000)
{
	echo "金額大於 <b>3000</b>，享有 <b>九折</b> 優惠！";
}
Else
{
	echo "<font color='red'>金額小於 <b>3000</b>，沒有任何優惠！</font>";
}
?>

</body>
</html>
