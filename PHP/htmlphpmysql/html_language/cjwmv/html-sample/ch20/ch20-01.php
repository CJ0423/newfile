<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=big5">
      <title>開啟與關閉檔案</title>
   </head>
   <body>
<?php 
//指定兩個不同的檔案路徑
//指定本機檔案
 $file1="C:\\xampp\htdocs\guestbook\word.txt";
//指定URL
 $file2="http://www.surpro.com/sample.htm";

//以唯讀開啟指定的檔案
$re_file1=@fopen($file1,"r");
$re_file2=@fopen($file2,"r");

//判定檔案1是否成功開啟(傳回值是否不等於0)
if($re_file1 !=0 ){
	echo $file1." 已成功開啟!<p>";
	echo "準備關閉檔案....<p>";
	//關閉檔案
	fclose($re_file1);
	echo $file1."檔案已經關閉!<p>";
}else{
	echo $file1." 沒有成功開啟!<p>";
}

echo "<hr>";
//判定檔案2是否成功開啟(傳回值是否不等於0)
if($re_file2 !=0 ){
	echo $file2." 已成功開啟!<p>";
	echo "準備關閉檔案....<p>";
	//關閉檔案
	fclose($re_file2);
	echo $file2."檔案已經關閉!<p>";
}
else
{
	echo $file2." 沒有成功開啟!<p>";  
}
?>
   </body>
</html>
