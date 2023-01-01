<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title></title>
</head>

<body>
<?php 
$class=array("score" => array(70,95,70,60,88,78,95,88,92,100),
          "name" => array("Alice","Peter","Elvin","Sindy","Simon",
					"Bob","Hank","Charles","Caroline","Linda"));

$class_new=array_change_key_case($class, CASE_UPPER);
//使用print_r函數以人類易於了解的模式列印
print_r($class_new);

?>
</body>
</html>
