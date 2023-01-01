<?php 
	ob_start();  //開啟輸出暫存器
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>建立session變數</title>
</head>
<body>

<?php 
//指定session_ID
session_id("X");
  
//啟動session
  session_start();
  
//分別指定兩個session變數的值
 $_SESSION["uname"]="文字";
 $_SESSION["upass"]="甲乙丙丁";

//設定陣列變數
$name=array("陳大同","張三丰","令狐沖");
 $_SESSION["aname"]=$name;

$score=array(0=>array("陳大同",91,92,93),
             1=>array("張三丰",81,82,83),
             2=>array("令狐沖",71,72,73));
 $_SESSION["ascore"]=$score;
 
 echo "已經建立相關的session變數<p>";
 echo "請切換到 session-out.php....";
 
//3秒後自動切換到另一個網頁
// header("Refresh:3; URL=2-4-1end.php");
 
//關閉輸出暫存器
 ob_end_flush();
?>
 
</body>
</html>
