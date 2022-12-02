<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>array_merge_recursive函數</title>
</head>
<body>

<?php
//原始兩個陣列 
$info1 = array("color" => array("red","blue"),"Linda",5,50000);
$info2 = array("color" => array("green","blue"),"Alice","Hank","Mary");

//列印原$info1
echo "原始 \$info1 陣列 : <br/>";
print_r($info1);

//列印原$info2
echo "<p>原始 \$info2 陣列 : <br/>";
print_r($info2);

//merge_recursive後的陣列
$result = array_merge_recursive($info1, $info2);
echo "</p><p>array_merge_recursive後的陣列 : <br/>";
print_r($result);
?>

</body>
</html>
