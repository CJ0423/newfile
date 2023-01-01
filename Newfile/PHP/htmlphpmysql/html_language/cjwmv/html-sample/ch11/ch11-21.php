<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>array_filter 函數</title>
</head>
<body>
<h2>array_filter 函數</h2>

<?php 
//自訂傳回大於50的函數
function Greater($nm){
	return($nm>50);
}

//自訂傳回字串長度等於3的字串
function Len3($str){
	if(strlen($str)==3){
		return($str);
	}
}

$number=array(12,56,34,126,288,566,33,78,90,16);
$class=array("Linda","Tina","Peter","Charles","Jason","Coco","Ben","Alphalli","Bob","May");

echo "原數值陣列 : ";
 foreach($number as $value){
	echo $value." , ";
 }

echo "<p>篩選>50的數值陣列 : ";
//執行篩選,結果存到$number2陣列
$number2=array_filter($number,"Greater");

 foreach($number2 as $value){
	echo $value." , ";
 }

echo "</p><p>原字串陣列 : ";
 foreach($class as $value){
	echo $value." , ";
 }

echo "</p><p>篩選長度=3的字串陣列 : ";
//執行篩選,結果存到$class2陣列
$class2=array_filter($class,"Len3");
 foreach($class2 as $key => $value){
	echo $value." , ";
 }
echo "</p>";
?>

</body>
</html>
