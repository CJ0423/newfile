<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>擴充陣列</title>
</head>
<body>

<?php 
//原始陣列
$number=array(12,56,34,126,288,566,33,78,90,16);

//以array_push()新增三筆新資料
//結果會變更到原來的陣列
  array_push($number,111,222,333);
  print_r($number);		//顯示陣列
	
//以array_pad()往前擴充到15(即新增兩筆資料在前面)
//結果會產生新的陣列
  $info=array_pad($number,-15,"Happy");
  echo "<p>";
  print_r($info);		//顯示陣列
?>

</body>
</html>
