<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>顯示日期</title>
</head>
<body>

<?php 
//取得系統的日期資料
$info=getdate();

//取得陣列中的對應資料
$m=$info['mon'];
$d=$info['mday'];
$y=$info['year'];

//驗證是否為合法日期格式
if(checkdate($m,$d,$y)){
	echo "這是合法的日期格式!<br/>";
	echo "年份是 => ".$y."<br/>";
	echo "月份是 => ".$m."<br/>";
	echo "日期是 => ".$d."<br/>";

}else{
	echo "<font color='red'>這不是合法的日期格式!</font>";
}

//顯示當天的月份英文簡稱,日期後加(st,nd),
//四位數年份和星期的英文全名
	echo "<p>".date ("M. dS Y l ");
?>

</body>
</html>
