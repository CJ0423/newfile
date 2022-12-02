<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>fread讀取檔案</title>
</head>
<body>

<?php 
//指定本機檔案
 $file1="C:\\xampp\htdocs\guestbook\word.txt";
//以唯讀開啟指定的檔案
 $re_file1=@fopen($file1,"r");

//判定檔案1是否成功開啟(傳回值是否不等於0)
if($re_file1 !=0 )
{
  //讀取檔案內容
	$content=fread($re_file1,100);
  //顯示檔案內容
    echo "以下是 linda.txt 的檔案內容:<p>";
	echo $content."<p>";  
	
  //關閉指定檔案
   $ret=fclose($re_file1);
   
  //判定檔案是否已關閉
  if($ret==True){
    echo "檔案已經正確關閉...";
  }else{
    echo "檔案沒有正確關閉...";
  }
}
else{
	echo "無法開啟指定檔案!";
}
 ?>

</body>
</html>
