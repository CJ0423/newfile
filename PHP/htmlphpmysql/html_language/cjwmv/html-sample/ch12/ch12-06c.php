<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>常用字串函數(二)</title>
</head>
<body>

<?php 
//原始字串
$info="  Holiday  ";
	echo "原字串 : ".$info;

//傳回字串長度
	echo "<p>字串長度為 : ";
	echo strlen($info);

//去除字串前後空白字元
        $info1=trim($info);
	echo "</p><p>原字串去除前後空白 : ".$info1; 
	echo "<p>字串長度為 : ";
	echo strlen($info1);
	
?>

</body>
</html>
