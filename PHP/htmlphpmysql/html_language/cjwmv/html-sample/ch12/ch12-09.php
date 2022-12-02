<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>輸出格式化字串</title>
</head>
<body>
<?php 
//原始字串
$info="5600 ml";
	echo "原始字串 : ".$info;
	
//轉換成數值並以科學記號表示3位數值來顯示
$num=sprintf("%.3e",$info);
	echo "<p>轉換成科學記號表示 : ".$num;
	
//轉換成數值並以浮點小數兩位來顯示
$num=sprintf("%.2f",$info);
	echo "<p>轉換浮點數表示 : ".$num;

//另一個訊息字串	
$message="每天需要的水份大於";
	echo "<p>";
	
	//%'.-25s設定message靠左,以 ..擴充到25位元
	//%s設定info以字串顯示
	printf("%'.-25s%s",$message,$info);

?>
</body>
</html>
