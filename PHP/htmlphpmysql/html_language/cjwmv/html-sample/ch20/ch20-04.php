<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>檔案指標移動</title>
</head>
<body>

<?php 
//指定要處理的檔案
 $file="write.txt";
 
//先判斷檔案是否存在
  if(file_exists($file))
  {
   //先顯示檔案的全部內容
	  echo "以下是 ".$file." 的檔案內容....<p>";
	  readfile($file);
	  echo "<hr>";
	
	//開啟指定檔案  
	$fileindex=fopen($file,"r"); 
	
	//移動檔案指標
	fseek($fileindex,10);
	//讀取對應位置的資料
	echo "指標位置10 的文字 -> ".fread($fileindex,2)."<p>";
	
	//由目前的位置再往下移動
	fseek($fileindex,22,SEEK_CUR);
	
	//判斷是否到檔案結尾
	if(!feof($fileindex))
	{
		//未到檔案結尾,就讀取二位元的資料
		echo "未到檔案結尾...<p>";
		echo "指標位置32 的文字 -> ".fread($fileindex,2)."<p>";
	}else{
		echo "已經到檔案的結尾!<br>";
	}
	 
	//切換到檔案的開頭
	$success=rewind($fileindex);
	if($success){
		echo "已經切換到檔案的開頭!";
	}else{
		echo "無法切換到檔案的開頭!";
	}
 }
  else
  {
  	echo $file." 檔案不存在!";
  }
?>

</body>
</html>
