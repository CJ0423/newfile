<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>轉換資料類型</title>
</head>
<body>

<?php 
$str="轉換資料類型";
echo "<h2>".$str."</h2>";

$data="566.34";		//原先是字串
echo "<font color='purple'>".$data."</font>";
echo "==>".gettype($data)."<br>";

settype($data,float);	//轉成浮點 $data=(float) $data;
echo "<font color='purple'>".$data."</font>";
echo "==>".gettype($data)."<br>";

$data=(int)$data;	//轉成整數
echo "<font color='purple'>".$data."</font>";
echo "==>".gettype($data)."<br>";
?>
</body>
</html>
