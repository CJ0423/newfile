<?php 
  //開啟輸出暫存器
	ob_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>讀取Cookie資料</title>
</head>

<body>
<?php 
//設定有效期限為目前的時間加上一星期
 $expire=strtotime("+1 week",time());

//建立三個Cookie資料
  setcookie("Charles","軟體工程師",$expire);
  setcookie("Elvin","經銷業務",$expire);
  setcookie("Peter","行政人員",$expire);
  
//以三種方法讀取Cookie資料
  $cookie1=$_COOKIE["Charles"];
  $cookie2=$_REQUEST["Elvin"];
  $cookie3=$HTTP_COOKIE_VARS["Peter"];

//清除暫存器內容
  ob_flush();
  
//顯示有效日期
  $expday=getdate($expire);
  $showexp=$expday["month"]." ".$expday["mday"].", ".$expday["year"];
 
  echo "Cookies的有效期限到: ".$showexp."<p>";
  echo "三筆Cookie資料分別是:<p>";
  echo $cookie1.", ";
  echo $cookie2.", ";
  echo $cookie3;
?>

</body>
</html>
