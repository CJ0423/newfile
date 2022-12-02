<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>file函數</title>
</head>
<body>

<?php 
//指定Server端的文字檔案
  $file1="C:\\xampp\htdocs\guestbook\word.txt";
 
//以file函數讀取檔案
 $content=@file($file1); 

//判定檔案是否存在
  if($content != 0)
  {
  //以foreach顯示陣列的內容
    echo "以下是以file()函數讀取<br>".$file1."  的內容:<hr><p>";
    foreach($content as $value)
	{
		//讀取每一行資料並加入換行動作
		echo $value."<br>";
	}
  }else{
  	echo "讀取的檔案不存在!";
  }
?>

</body>
</html>
