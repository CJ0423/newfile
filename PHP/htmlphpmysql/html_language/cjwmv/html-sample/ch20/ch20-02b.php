<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>file函數</title>
</head>
<body>

<?php 
//指定Server端的文字檔案
  $file1="C:\\xampp\\htdocs\\ch20\\word.txt";
 
//以file函數讀取檔案 小老鼠表示一開始沒有資料，但不要顯示出來，請幫我設定為0就好。
 $content=@file($file1); 
// 不用透過fopen就可以開啟，file將會自動開啟超級方便，但是每一行將會以陣列的方式顯示出來，因此我們用foreach去開啟。

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
