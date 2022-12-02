<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>索引和元素互調</title>
</head>
<body>

<?php 
//原始陣列,預設索引是由0開始的整數
$class=array("Linda","Tina","Peter","Charles","Jason","Coco","Ben","Alphalli","Bob","May");

//列出所有的索引
print_r(array_keys($class));

echo "<p>";
//列出所有的元素
print_r(array_values($class));

echo "<p></p>";
//互調後的結果
print_r(array_flip($class));
?>

</body>
</html>
