<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>陣列合併</title>
</head>
<body>

<?php 
$score=array(70,95,70,60,88,78,95,88,92,100);
$name =array("Alice","Peter","Elvin","Sindy","Simon",
			"Bob","Hank","Charles","Caroline","Linda");

//單純合併兩個陣列
echo "</p><p>單純合併score和name陣列:<br/>";
print_r(array_merge($score,$name));
			
//以$name為索引,$score為值,合併為一個陣列
$class=array_combine($name,$score);

//顯示新陣列
echo "</p><p>以name為索引,score為值,合併成新陣列:<br/>";
while(list($index,$value)=each($class))
{
	echo "\$class[$index] => ".$value."</br>";
}
?>

</body>
</html>
