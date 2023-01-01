<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>break 指令</title>
<style>
	h2 {color:#CC00FF}
</style>
</head>

<body>
<h2>九九乘法表(二)</h2>
<?php 
echo "<table bgcolor='#FFFFCC' border=2>";
for($a=1;$a<10;$a++){
   echo "<tr>";
   for($b=1;$b<10;$b++){
      //加入if條件式
   		if($b>7){
			//跳出此次迴圈,回到迴圈的起始
			continue;	
   		}
   echo "<td>".$a."*";
   echo $b." = ".$a*$b."</td>";
   }
   echo "<tr>";
}
echo "</table>";
?>
</body>
</html>
