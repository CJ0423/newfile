<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>readfile一次讀取檔案</title>
</head>

<body>

<?php 
//指定Server端的HTML檔案
 $file1="C:\\xampp\htdocs\guestbook\word.txt";
 
 //以file_exists()函數判定檔案是否存在
 if(file_exists($file1))
 {
  echo "以下是 <font color=red>".$file1 ." </font>的檔案內容:<p>";
 
 //以readfile函數讀取檔案並顯示內容
 //readfile函數傳回的是檔案大小
 $fsize=readfile($file1); 

 echo "<p><font color=red>這個檔案的大小 = ".$fsize."</font>";
 }
 else
 {
 	echo $file1." 這個檔案不存在!";
 }
?>

</body>
</html>
