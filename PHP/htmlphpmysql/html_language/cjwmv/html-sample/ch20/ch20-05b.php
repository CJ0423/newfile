<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>刪除檔案</title>
</head>
<body>

<?php 
//指定檔案
  $file="newwrite.txt";
  
//先判斷檔案是否存在
  if(file_exists($file))
  {
  	//刪除檔案
	$success=unlink($file);
	
	//判定是否刪除成功
	if($success){
		echo $file." 檔案已經成功刪除了!";
	}else{
		echo $file." 檔案無法刪除!";
	}
	
  }else
  {
  	echo $file." 此檔案不存在!";
  }

?>

</body>
</html>
