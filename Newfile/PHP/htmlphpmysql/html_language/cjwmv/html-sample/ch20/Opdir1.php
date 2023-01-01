<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
  </head>
  <body>
    <h1 align="center"></h1>
<?php   //資料夾內容下載
	$fileDir = "C:\\xampp\\htdocs\\CH20";;
	$fileResource = opendir($fileDir);
        echo "<table border='1' width='100%'><tr><td width='20%' valign='top'>資料夾：</td><td>";
	// readdir每次讀取一個
        while($fileList = readdir($fileResource)){
	if(is_dir($fileDir.'\\'.$fileList))	echo $fileList."<br />";
	}
    // 移動回上方
	rewinddir($fileResource);
       
	echo "</td></tr><tr><td width='20%' valign='top'>檔案：</td><td>";
	while($fileList = readdir($fileResource)){
		if(is_file($fileDir.'\\'.$fileList)){$info="<a href='$fileDir\\".$fileList."'>".$fileList."</a><br/>";
	echo $info;
		}}
	echo"</td></tr></table>";
	closedir($fileResource);
?>
  </body>
</html>
