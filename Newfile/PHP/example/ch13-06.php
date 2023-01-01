<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>遞迴函數</title>
</head>
<body>
<h2>遞迴函數</h2>

<?php 
function factory($n)
{//判定是否為整數且大於零
  if(is_integer($n) && $n>0){
	 if($n>=2){
		$temp=$n ;
		$n=$n-1;
		//遞迴呼叫本身
		$total=$temp * factory($n);
		return $total;
	 }else{
		return 1;
	 }
  }else{
  	echo "請輸入大於零的整數";
  }
}

//呼叫factory 函數
echo "5! = ".factory(5)."<br/>";
echo "6! = ".factory(6)."<br/>";
echo "7! = ".factory(7)."<br/>";
?>

</body>
</html>
