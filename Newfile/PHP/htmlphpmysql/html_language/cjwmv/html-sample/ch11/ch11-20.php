<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>array_fill 函數</title>
</head>
<body>
<h2>array_fill 函數</h2>

<?php 
//以填滿的方式產生新陣列
$info=array_fill(1,10,"Holiday");

//從1開始填,陣列大小是10
for($a=0;$a<count($info);$a++) {
	echo "\$info[$a] => ".$info[$a]."<br/>";
}
?>

</body>
</html>
