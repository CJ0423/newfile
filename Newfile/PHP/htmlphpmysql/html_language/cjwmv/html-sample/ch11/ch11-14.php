<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>陣列排序</title>
</head>

<body>
<?php
//第一個陣列
$number=array(123,345,23,66,7,821,10,33,90,100);
echo "原始的陣列順序 : <br/>";
for($a=0;$a<count($number);$a++){
	echo $number[$a]." , ";
}

echo "<p>排序後的陣列 : <br/>";
sort($number);
for($a=0;$a<count($number);$a++){
	echo $number[$a]." , ";
}
echo "</p>";

//第二個陣列
$fruits = array("first" => "apple","second" =>"lemon" ,"third" =>"orange" , "fourth" =>"banana" );
echo "<p>第二個陣列 : <br/>";

while (list($key, $val) = each($fruits)) {
	//列出索引值和陣列元素
   echo "$key => $val<br/>";
}

//使用arsort遞減排序,索引也一併被調整
asort($fruits);

//將指標指回陣列的第一個位置
reset($fruits);
echo "<p>asort之後 : <br/>";

while (list($key, $val) = each($fruits)) {
	//列出索引值和陣列元素
   echo "$key => $val<br/>";
}
?> 

</body>
</html>
