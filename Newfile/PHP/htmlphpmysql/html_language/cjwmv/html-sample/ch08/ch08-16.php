<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Radio選項鈕</title>
</head>

<body>

<?php 
///////  接收資料 (取得表單中所輸入對應欄位中的資料) /////////////////
$uname=$_POST["uname"];
$telephone=$_POST["telephone"];
$delivery=$_POST["delivery"];
$address=$_POST["address"];

/////////////////  列印資料  ///////////////// 
echo "<b>".$uname."  </b>的連絡電話是: <b>".$telephone."</b><p>";

//取得選項鈕所選取的項目
echo "您訂購產品會依照  <b>".$delivery." </b>郵寄方式寄到下列地址:</br>";

//顯示一條水平線
 echo "<hr><p>";
 
//取得地址資料
 echo $address;

?>

</body>
</html>

