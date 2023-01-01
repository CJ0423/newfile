<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>foreach重覆結構</title>
</head>
<body>
<?php 
//定義名稱為$price的一維陣列
$price=array(12,23,34,40,66);
echo "陣列中所含的資料有 : <br/>";

//以foreach結構列出所有的陣列值
 foreach($price as $number)
 {
	echo $number." , ";
 }

//列出索引值和相關資料
echo "<p>";
echo "另一種顯示陣列的方式 : <br/>";
 foreach($price as $key => $number)
 {
	echo "\$price[$key] => ".$number."<br/>";
 }
echo "</p>";

?>

</body>
</html>
