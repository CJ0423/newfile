<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>fread讀取檔案</title>
</head>
<body>

<?php 
//指定本機檔案
 $file1="C:\\xampp\\htdocs\\ch20\\word.txt";
//以唯讀開啟指定的檔案
// r表示唯讀
 $re_file1=@fopen($file1,"r");

//判定檔案1是否成功開啟(傳回值是否不等於0)
if($re_file1 !=0 )
{
  //讀取檔案內容 
  // 原始設定為100改成102之後就可以了，這是因為記事本在這邊是用utf-8，所以一個中文字是3byte。big-5則是用一個中文字2byte。
	$content=fread($re_file1,102);
  // fread函數只會傳輸到，我們所限制的總共字數，超過將不再顯示。 可以想成電子書的概念吧

  //顯示檔案內容
    echo "以下是 word.txt 的檔案內容:<p>";
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
