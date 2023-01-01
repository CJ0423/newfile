<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>list 結構</title>
</head>
<body>

<?php 
//list第一種應用
$info=array(“張三” , “經理” , 45000);
  list ($name , $emp , $pay)=$info;  //將陣列$info的資料依序放入變數$name , $emp , $pay中
  echo “姓名：”.$name.”<br/>”;
  echo “職務：”.$emp.”<br/>”;
  echo “薪資：”.pay.”<br/>”;

//list第二種應用
$number=array(12,34,45,56,78,89);
echo "<p>陣列中的所有值:<br/>";

//while搭配list結構 ， $index陣列的索引值 ， $value對應索引編號的資料
 while(list($index,$value)=each($number))   
 {
	echo "\$number[$index] => ".$value."<br/>";
 }
echo "</p>"
?>

</body>
</html>
