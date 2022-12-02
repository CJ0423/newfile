<?php
  $author = $_POST["author"];
  $subject = $_POST["subject"]; 
  $content = $_POST["content"]; 
  $current_time = date("Y-m-d H:i:s");

	//建立資料連接
	$link = mysqli_connect("localhost", "root");
	if (!$link) die("建立資料連接失敗");
			
	//開啟資料表並執行 SQL 命令
	$db_selected = mysqli_select_db($link,"guestbook");
	if (!$db_selected) die("開啟資料庫失敗");
      mysqli_query($link,"SET NAMES UTF8");
	$sql = "INSERT INTO message (author, subject, content, date)
	        VALUES ('$author', '$subject', '$content', '$current_time')";
	$result = mysqli_query($link,$sql );
	if (!$result) die("執行 SQL 命令失敗");

	//關閉資料連接
	mysqli_close($link);  
  
	//將網頁重新導向並結束網頁執行
	header("location:index.php");
	exit();
?>
