<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>定義函數</title>
</head>
<body>
<h2>定義函數</h2>

<?php 
function average($a,$b)
{
  //先判斷輸入的資料是否是數值
  if(is_numeric($a) && is_numeric($b)){
	$avg=($a+$b)/2;
	//傳回平均值
	return $avg;
  }else{
  	return "<font color='red'>所輸入的資料非數值 !</font>";
  }
}

//呼叫自訂函數
  $info=average(20,64);
//顯示傳回值
  echo "參數 20 和 64 的平均值是 : ".$info;

//再呼叫自訂函數,但給定的參數不同
  $info=average(aa,23);
  echo "<p>參數 aa 和 23 的平均值是 : ".$info;
?>

</body>
</html>
