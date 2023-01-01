<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>寫入資料</title>
</head>

<body>

<?php 
//指定和ch20-03.php同路徑的文字檔案
 $file="write.txt";

//先判斷檔案是否存在
  if(file_exists($file))
  {
  	//先顯示檔案原有的內容
	  echo "write.txt檔案的原始內容如下:<p>";
	  readfile($file);
	  
  }else{
  	echo "<font color=red>".$file." </font>檔案不存在!<br>";
	echo "將試著建立新的檔案!";
  }
  
//開啟可讀寫入的檔案,並將指標指到檔案結尾 +表示可讀可寫 a+	以讀寫模式開啟，並將指標指到檔案結尾位置。如果檔案不存在，會建立一個新檔案 ch20 01。
  $fileindex=fopen($file,"a+");
 
  
//指定要寫入的字串和寫入資料到檔案
// 這個符號可以產生換行的效果\r\n
  $str="這是新加入\r\n到 word.txt 檔案的字串。 ";
  $write_ok=fwrite($fileindex,$str);  
  // 這會幫忙寫入資料
	  
//判定是否寫入成功
  if($write_ok !=0)
  {
  	echo "<hr>";
  	echo "<p>檔案已經成功寫入,完成後的檔案資料如下:<p>";
    // 印出資料
	readfile($file);
  }
	  
//關閉檔案已開啟的檔案指標
  fclose($fileindex);


?>

</body>
</html>
