<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>常用字串函數(一)</title>
</head>
<body>

<?php 
//原始字串
$info="Returns string with all alphabetic characters converted to uppercase.";
	echo "原字串 : ";
	echo $info."<br/>";
	echo "此字串長度 = ".strlen($info)."<br/>";
	
	echo "<p>全部改成大寫:<br/>";
	echo strtoupper($info);
	
	echo "</p><p>全部改成小寫:<br/>";
	echo strtolower($info)."</p><p>";

//將字串依單字轉存成陣列	
$result=str_word_count($info,1);
	//列印陣列
	print_r($result);
?>

</body>
</html>
