<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>巢狀函數</title>
</head>
<body>
<h2>巢狀函數</h2>

<?php 
function nest_transform($n)
{
  function bin($n)
  {//轉換成為二進位
  	return decbin($n);
  }
  function oct($n)
  {//轉為八進位
  	return decoct($n);
  }
  function hex($n)
  {//轉為十六進位
  	return dechex($n);
  }
  //以表格顯示轉換後的資料
	echo "<table border=2 width=80%>";
	//呼叫子函數
 	echo "<tr><th>二進位</th><td>".bin($n)."</td></tr>";   
 	echo "<tr><th>八進位</th><td>".oct($n)."</td></tr>";   
 	echo "<tr><th>十六進位</th><td>".hex($n)."</td></tr>";  
	 
}//結束nest_transform函數

echo "十進位 100 轉換成其他進位表示 : <br/>";

//呼叫自訂函數
  nest_transform(100);
?>

</body>
</html>
