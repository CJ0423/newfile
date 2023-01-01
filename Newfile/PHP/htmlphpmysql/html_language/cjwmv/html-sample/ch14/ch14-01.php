<?php 
  //開啟輸出暫存器
	ob_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>建立Cookie</title>
</head>
<body>

<?php 
$name="Linda";
$value="努力存錢!";

//設定有效期限為目前的時間加上一星期
 $expire=strtotime("+1 week",time());

//建立Cookie
 setcookie($name,$value,$expire);

//出清輸出暫存器
  ob_end_flush();
 
//顯示目前日期
  $now=getdate(time()); 
  $shownow=$now["month"]." ".$now["mday"].", ".$now["year"];
  
//顯示有效日期
  $expday=getdate($expire);
  $showexp=$expday["month"]." ".$expday["mday"].", ".$expday["year"];
  
 echo "Cookie的名稱是: ".$name."<p>";
 echo "目前的時間: ".$shownow."<p>";
 echo "Cookie有效期限: ".$showexp;
?>

</body>
</html>
