<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>邏輯運算子</title>
</head>

<body>
<h2>邏輯運算子</h2>
<?php 
$a=true;
$b=false;
echo "<font color='blue'>";
echo "\$a = true<br>";
echo "\$b = false</font><br><hr>";

echo "\$a && \$b 運算結果 ";
 if($a && $b){
	echo "true<p>";
 }else{
	echo "false<p>";
 }
echo "\$a xor \$b 運算結果 ";
 if($a xor $b){
	echo "true<p>";
 }else{
	echo "false<p>";
 }
?>
</body>
</html>
