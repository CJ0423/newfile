<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>紅娘俱樂部</title>
</head>

<body>
<?php 
//讀取基本資料,並指定給相對應的變數
$hi=$_POST["hig"];
$we=$_POST["wei"];
$ag=$_POST["age"];
$pa=$_POST["pay"];	
echo "<h3><font color='blue'>您的條件如下：</font></h3><br>";
echo "<h4>身高:".$hi." 公分</h4><br>";
echo "<h4>體重:".$we." 公斤</h4><br>";
echo "<h4>年齡:".$ag." 歲</h4><br>";
echo "<h4>月薪:".$pa." 元</h4><br>";

//複合條件表示法的應用
if(($hi>170)and(($ag>=20)and($ag<=30))and(($we>=60)and($we>=60))and($pa>30000))
{
echo"恭喜您!雀屏中選";
}
else
{
echo"很抱歉!條件不符";
}

?>

</body>
</html>
