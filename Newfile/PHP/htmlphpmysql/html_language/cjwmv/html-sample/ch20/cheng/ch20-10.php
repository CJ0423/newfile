<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>檔案上傳與接收</title>
</head>
<body>

<?php 
//接收傳遞過來的使用者名稱
echo $_POST["uname"]." 你好:<p>";
$error_msg=$_FILES["ufile"]["error"];
$fname=$_FILES["ufile"]["name"];
// 這是檔案上傳需要記得的資料，可參考下方交叉比對
$tmpname=$_FILES["ufile"]["tmp_name"];
$fsize=$_FILES["ufile"]["size"];
$ftype=$_FILES["ufile"]["type"];

//判定檔案是否傳遞成功
  if($error_msg)
  {
	echo "<font color=red>檔案沒有上傳成功!</font><p>";
	echo "對應的錯誤碼是 -> ".$error_msg;
  }
  else
  { 
    //檔案上傳成功
	echo "已經收到上傳的檔案,檔名是 -> ".$fname."<br>";
	echo "伺服器中暫存的位置和檔名 -> ".$tmpname."<br>";
	echo "上傳檔案的大小 -> ".$fsize."<br>";
	echo "上傳檔案的檔案類型 -> ".$ftype."<br>";
	echo "<hr>";
	
	//將檔案另存到指定的位置
	//$success=copy($tmpname,"newsql.txt");
	chdir("C:\\Users\\User\\Desktop");
        $success=copy($tmpname,$fname);	//複製過來的檔案必定在同一層的資料夾內
	if($success)
	{
		echo "檔案已經複製成功!<br>";
		echo "新的路徑和檔名如下:<br>";
		//echo realpath("newsql.txt")."<p>";    
       echo realpath($fname)."<p>";
		
		//刪除暫存器中的檔案
		unlink($tmpname);
	}else{
		echo "<font color=red>無法複製檔案!</font>";
	}
  }
?>

</body>
</html>
