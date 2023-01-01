<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>常用字串函數(二)</title>
</head>
<body>

<?php 
//原始字串
$info="Holiday";
	echo "原字串 : ".$info;

//在前後加入"!",使字串長度延伸到10
	echo "<p>以!符號延伸字串長度到10 : ";
	echo str_pad($info,10,"!",STR_PAD_BOTH);

//隨機重排字串
	echo "</p><p>隨機重排字串 : ";
	echo str_shuffle($info);
	
//以Day重覆三次建立新字串
	echo "</p><p>以Day重覆三次建立新字串 : ";
	echo str_repeat("Day",3);
?>

</body>
</html>
