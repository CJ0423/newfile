<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>尋找與取代字串</title>
</head>
<body>

<?php 
//原字串
$info="Happy Valentine's Day!";
	echo "原字串 : ".$info;
	echo "<p>取代後的字串 : ";
	echo str_replace("Valentine","Father",$info);
	
//另一字串
$mail="service@hotmail.com";
	echo "</p><p>原email : ".$mail;
	echo "</p><p>擷取@之後的字串 : ";
	echo strstr($mail,"@");
?>

</body>
</html>
