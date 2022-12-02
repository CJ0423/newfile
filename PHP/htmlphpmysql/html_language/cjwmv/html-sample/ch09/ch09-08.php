<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>『?:』三元運算子</title>
</head>

<body>
<?php 
$score=$_REQUEST[score];
echo "<h3><font color='blue'>輸入的成績是： ".$score."</font></h3>";

//使用『?:』三元運算子
//將結果指定給變數 $message
$message=($score>=60)?" 成績及格，恭喜您":"<font color='red'>成績不及格，請再加油。</font>";
echo $message;
?>

</body>
</html>
