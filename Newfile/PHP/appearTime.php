<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>顯示時間</title>
</head>
<body>

<?php 
//取得localtime資料
$info=localtime(time(),true);
echo "取得Local時間資料:<br/>";
//列印陣列中的資料
foreach($info as $index => $value)
{
	echo "\$info[$index] => ".$value."<br/>";
}

//轉成日期格式系統時間讀取到的約是格林威治的時間
	echo "<p>系統日期和時間 : <br/>";
	echo ($info["tm_year"]+1900)."年".($info["tm_mon"]+1)."月".$info["tm_mday"]."日<br/>";
	echo "星期".$info["tm_wday"]." => ".($info["tm_hour"]+7)."點";
		
//取得UNIX時間戳記並指定顯示格式
$tim=mktime(11,30,20,8,16,2005);
	echo "<p>另一筆時間資料 : <br/>";
	echo date("Y-M-d h:i:s A",$tim);
?>
</body>
