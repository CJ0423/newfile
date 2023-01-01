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

//巢狀結構 if....[if....(if.....else)...else]....else...
if($total>=3000)
{ $mony="3000";
  $per="九折";
  if($total>=5000)
  { $mony="5000";
    $per="八折";
    if($total>=10000)
    { $mony="1000";
      $per="七折";
    }
  }
   echo "金額大於 <b>".$mony."</b>，享有 <b>".$per."</b> 優惠！";
}
else
{
	echo "<font color='red'>金額小於 <b>3000</b>，沒有任何優惠！</font>";}
?>

</body>
</html>
