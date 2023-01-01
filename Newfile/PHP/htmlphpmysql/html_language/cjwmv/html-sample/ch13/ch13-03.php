<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>傳遞整個陣列</title>
</head>
<body>

<?php 
//原始陣列資料
$info=array(12,34,56,76,78,55,66,90,40,88);

function sorting($arr)
{//陣列遞減排序 
	arsort($arr);
	
	//由陣列最後刪除5元素
	for($x=0;$x<5;$x++){
		// 陣列都喜歡開派對所以array_pop()會把陣列的最後一個趕走
		array_pop($arr);
	}
	//傳回最大的5筆資料
	return $arr;
}

echo "原始陣列資料:<br/>";
print_r($info);
echo "<p>";

//呼叫函數 將info帶入函數 sorting接著進行大到小的排列。 
$result=sorting($info);

//顯示回傳的陣列資料
  echo "顯示回傳的陣列資料 : <br/>";
  foreach($result as $value)
  {
  	echo $value." -> ";
  }
?>

</body>
</html>
