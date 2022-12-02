<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>不定參數函數</title>
</head>
<body>
<h2>不定參數函數</h2>

<?php 
//不定參數函數
function print_me()
{
	$nm=func_num_args();
	echo "此次共傳 ".$nm." 個參數。<br/>";
	for($x=0;$x<$nm;$x++){
		echo func_get_arg($x)."<br/>";
	}
}
//呼叫函數，傳遞2參數
  print_me("Linda","Peter");

echo "<p>";
//呼叫函數，傳遞3參數
  print_me("Happy","Holiday","Elvin");

?>

</body>
</html>
