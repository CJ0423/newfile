<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>array_multisort函數</title>
</head>
<body >
<h2>array_multisort 函數</h2>

<?php 
$class=array("score" => array(70,95,70,60,88,78,95,88,92,100),
             "name" => array("Alice","Peter","Elvin","Sindy","Simon",
			 				"Bob","Hank","Charles","Caroline","Linda"));
				
				// 將分數作為數值，由高到低排序
array_multisort($class["score"], SORT_NUMERIC, SORT_DESC,
                // 將名字作為字串，由小到大排序
                $class["name"], SORT_STRING, SORT_ASC);
                
echo "<table bgcolor='#FFFF99' border=2 width='80%'>";
echo "<tr><th>score</th>";
for($a=0;$a<10;$a++)
{
	echo "<td>".$class["score"][$a]."</td>";
}
echo "</tr><tr><th>name</th>";
for($a=0;$a<10;$a++)
{
	echo "<td>".$class["name"][$a]."</td>";
}
?>

</body>
</html>
