<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>陣列指標控制函數</title>
</head>
<body>

<?php 
$info=array("Linda","Alice","Peter","Elvin","Caroline");
echo "此陣列有 <font color='red'>".count($info)." </font>個元素<br/>";

 for($a=0;$a < count($info);$a++)
 {
	echo "\$info[$a]=>".$info[$a] ."<br/> ";
 }

echo "<p>目前指標的位置 ： ".key($info)."<br/>";

//將指標移到下一個
next($info);
echo "指標移到下一個位置 : ".key($info)."</p>";

//將指標移到下一個
next($info);
echo "<p>指標移到下一個位置 : ".key($info)."<br/>";
echo "對應的陣列內容 : ".current($info)."</p>";

//指標移到最後一個
end($info);
echo "<p>最後一個位置 : ".key($info)."<br/>";
echo "對應的陣列內容 : ".current($info)."</p>";

//將指標指到第一個位置
reset($info);
echo "<p>第一個位置 : ".key($info)."<br/>";
echo "對應的陣列內容 : ".current($info)."</p>";

?>

</body>
</html>
