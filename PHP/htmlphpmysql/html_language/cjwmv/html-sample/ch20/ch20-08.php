<?php
// 知道位置之後我們要做什麼呢(?)
	$fileDir = "C:\\xampp\\htdocs\\example";
	// 開啟資料夾 並且回傳結果
	$fileResource = opendir($fileDir);
	echo "<table border='1' width='100%'><tr><td width='20%' valign='top'>資料夾：</td><td>";
	while($fileList = readdir	($fileResource))//這是用來讀取再用的，美讀取一筆資料就會往後一個位置，當所有位置都讀取完畢後，就會停止了喔。
        { 
		// 只要有讀取到字串就會顯示 因此也可以想成用來找資料夾的
		if(is_dir($fileDir.'\\'.$fileList))	echo $fileList."<br />";
	}
	// 再次移動到最後面，把資料在印出來
	rewinddir($fileResource);
	echo "</td></tr><tr><td width='20%' valign='top'>檔案：</td><td>";
	while($fileList = readdir($fileResource))
        {//ch20 15 是檔案就
		if(is_file($fileDir.'\\'.$fileList))echo $fileList."<br />";
	}
	echo "</td></tr></table>";
	closedir($fileResource);
?>
