<?php 
//指定和teow1.php同路徑的文字檔案
 $file="dat1.txt";

//先判斷檔案是否存在
  if(file_exists($file))
  {
  	//先顯示檔案原有的內容
	  echo "dat1.txt檔案的原始內容如下:<p>";
	  readfile($file);
	  
  }else{
  	echo "<font color=red>".$file." </font>檔案不存在!<br>";
	echo "將試著建立新的檔案!";
  }
//開啟可讀寫入的檔案,並將指標指到檔案結尾
  $fileindex=fopen($file,"a+");
  
//指定要寫入的字串和寫入資料到檔案
  $str="業大同;N120763421;彰化縣;二水鄉大同街29號\r\n";
  $write_ok=fwrite($fileindex,$str);  
	  
//判定是否寫入成功
  if($write_ok !=0)
  {
  	echo "<hr>";
  	echo "<p>檔案已經成功寫入,完成後的檔案資料如下:<p>";
	readfile($file);
  }
	  
//關閉檔案已開啟的檔案指標
  fclose($fileindex);
?>
