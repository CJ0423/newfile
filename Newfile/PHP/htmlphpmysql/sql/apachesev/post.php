<?php
  $author = $_POST["author"];
  $subject = $_POST["subject"]; 
  $content = $_POST["content"]; 
  $current_time = date("Y-m-d H:i:s");

	//建立資料連接
	$link = mysql_connect("localhost", "root", "123456");
	if (!$link) die("建立資料連接失敗");
			
	//開啟資料表並執行 SQL 命令
	$db_selected = mysql_select_db("guestbook", $link);
	if (!$db_selected) die("開啟資料庫失敗");
        mysql_query("SET NAMES utf8");
	$sql = "INSERT INTO message (author, subject, content, date)
	        VALUES ('$author', '$subject', '$content', '$current_time')";
	$result = mysql_query($sql, $link);
	if (!$result) die("執行 SQL 命令失敗");

	//關閉資料連接
	mysql_close($link);  
  
	//將網頁重新導向並結束網頁執行
	header("location:index.php");
	exit();
?>
