<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>array_diff與array_intersect</title>
</head>
<body>

<?php 
$class1=array("Linda","Tina","Peter","Charles","Jason","Coco","Ben","Alphalli","Bob","May");
$class2=array("Lkk","Tina","Hank","Peter","Charles","Caroline","Coco","Ben","Bert","Any");

echo "使用array_diff 函數<br/>";
//列出陣列1中沒有出現在陣列2的元素和對應的索引值
  print_r(array_diff($class1,$class2));

echo "<p>使用array_intersect函數<br/>";
//列出陣列1中沒有出現在陣列2的元素和對應的索引值
  print_r(array_intersect($class1,$class2));
echo "</p>";


?>

</body>
</html>
