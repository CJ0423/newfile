<?php 
	ob_start();  //開啟輸出暫存器
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>建立兩個Cookie</title>
</head>
<body>

<?php 
//設定有效期限為目前的時間加上一天
 $expire=strtotime("+1 day",time());

//建立Cookie
  setcookie("Charles","軟體工程師",$expire);

echo "已經建立Cookie...<p>";
echo "3秒後會自動切換到7-1-3end.php...";

//以header()函數來切換網頁
  header("Refresh:3; URL=ch14-03end.php");
  
//關閉輸出暫存器
  ob_end_flush();
?>

</body>
</html>
