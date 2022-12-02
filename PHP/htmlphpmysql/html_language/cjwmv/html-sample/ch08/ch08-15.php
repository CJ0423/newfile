<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>顯示會員資料</title>
</head>

<body>

<?php 
///////  接收資料 (取得表單中所輸入對應欄位中的資料) /////////////////
$uname=$_POST["uname"];
$upass=$_POST["upass"];
$note=$_POST["note"];

/////////////////  列印資料  ///////////////// 
echo "會員名稱: ".$uname."<p>";
echo "會員密碼: ".$upass."<p>";
echo "會員備註: ".$note ."<p>";
?>

</body>
</html>


