<?php 
	ob_start();  //開啟輸出暫存器
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>刪除Cookie</title>
</head>
<body>

<?php 
//判定先前所建立的Cookie是否存在
if(isset($_COOKIE["Charles"]))
{
	echo "目前名稱為Charles的Cookie還存在!<p>";
	//將時間設為目前時間減去30天
	$newtime=strtotime("-30 days",time());
	//設定有效時間已經過期
	setcookie("Charles","",$newtime);
	
	//更新畫面
	echo "5秒後自動更新此網頁....";
	header("Refresh:5");
	ob_end_flush();
}
else
{
	echo "用戶端已經不含名稱為Charles的cookie!";
}
?>

</body>
</html>
