<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>字串分割與合併</title>
</head>
<body>

<?php 
//原始字串
$info="4.0(compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)";
	echo "原始字串 : ".$info;

//以;為分隔,將資料分割放入陣列
$arr_info=explode(";",$info);
	echo "<p>explode分割後的陣列資料 : <br/>";
	print_r($arr_info);
	
//以大小為10字元來分割資料
$arr_info=str_split($info,10);
	echo "</p><p>str_split分割後的陣列資料 : <br/>";
	print_r($arr_info);

//原始陣列
$info2=array("Microsoft","Internet","Explorer","6.0");
	echo "<p>原始的陣列資料 : ";
	print_r($info2);
	
//以空格合併陣列中的資料
	echo "<p>合併後的字串資料 : ".implode(" ",$info2);

?>
</body>
</html>
