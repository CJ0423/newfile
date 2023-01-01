<?php
	$fileDir = "C:\\xampp\\htdocs\\example";
	$fileResource = scandir($fileDir,0);
//預設為0表示遞增排序，設定為1表示遞減排序
	// $fileResource = scandir($fileDir,1);
	echo "<table border='1' width='100%'><tr><td width='20%' valign='top'>資料夾：</td><td>";
	foreach($fileResource as $fileName)
        {
		if(is_dir($fileDir.'\\'.$fileName))	echo $fileName."<br />";
	}
	echo "</td></tr><tr><td width='20%' valign='top'>檔案：</td><td>";
	foreach($fileResource as $fileName)
        {
		if(is_file($fileDir.'\\'.$fileName))	echo $fileName."<br />";
	}
	echo "</td></tr></table>";
?>
