<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>位元運算子</title>
</head>
<body>

<?php
//指定變數值 
$a=6;
$b=10;
$result1= ~$a;
$result2=$a & $b;

//顯示原變數值
  echo "\$a = ".$a."<br>";
  echo "\$b = ".$b."<hr>";

//顯示位元運算後的值
  echo "~\$a = ".$result1."<br>";
  echo "\$a&\$b = ".$result2."<br>";
?>

</body>
</html>
