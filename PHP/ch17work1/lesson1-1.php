<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>嘗試連接資料庫 此處使用的是帳號密碼連線</title>
</head>
<body>
	<?php
	$link = mysqli_connect("localhost","sales","123456");
	if(!$link){

		exit("連線失敗".mysqli_connect_error());
	}
	else{echo"成功";}
	//奇怪的問題不管我怎麼輸入錯誤的資訊，他也不會跳出來頂多給我一個白色畫面而已
	?>
</body>
</html>
