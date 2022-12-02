<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>陣列分割</title>
</head>
<body>

<?php 
$score=array(70,95,70,60,88,78,95,88,92,100);
echo "原始score陣列:<br/>";
foreach($score as $value){
	echo $value." , ";
}	
	
//分割score陣列
echo "<p>分割後的score陣列:<br/>";
print_r(array_chunk($score,5));			
?>

</body>
</html>
