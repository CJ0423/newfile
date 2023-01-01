<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>檔案複製與改名</title>
</head>
<body>

<?php 
//指定和9-1-5A.php同路徑的文字檔案
 $file="word.txt";
 
//先判斷檔案是否存在 
  if(file_exists($file))
  {
	//複製檔案 幫我複製一個檔案 並且叫做word2
	$success=copy($file,"word2.txt");
	if($success)
	{
		echo "檔案已經成功複製!<p>";
		// rename更改名字
		$rn_success=rename("word2.txt","newwrite.txt");
		if($rn_success){
			echo "word2.txt 已經改名為: newwrite.txt<p>";
			echo "記得開啟檔案總管查看一下...";
		}else{
			echo "word2.txt 無法改名為: newwrite.txt";
		}
	}else{
		echo "檔案沒有成功複製!";
	}
  }

?>

</body>
</html>
