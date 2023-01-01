<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>刪除陣列元素</title>
</head>

<body>

<?php 
//原始陣列
$number=array(12,56,34,126,288,566,33,78,90,16);
echo "陣列數值的總合 : ".array_sum($number)."<p>";
echo "原始陣列:<br/>";
print_r($number);
echo "</p><p>";

//刪除最後一個元素
array_pop($number);
echo "刪除最後一個:<br/>";
print_r($number);

//刪除第一個元素
array_shift($number);
echo "</p><p>";
echo "刪除第一個:<br/>";
print_r($number);
?>

</body>
</html>
