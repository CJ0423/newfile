<?php 
	ob_start();  //開啟輸出暫存器
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>讀取session變數</title>
</head>
<body>

<?php 

//啟動session
  session_start();
  
//讀取session ID
  echo "此次的session ID = ".session_id()."<p>";

//判定session是否存在

	echo "uname這個session變數存在,<br>";
	echo "對應的變數值是: ".$_SESSION["uname"]."<p>";


//判定另一個session是否存在
	echo "upass這個session變數存在,<br>";
	echo "對應的變數值是: ".$_SESSION["upass"]."<p>";

//一維陣列變數讀取列印
  $name=$_SESSION["aname"];  
  for($a=0;$a<3;$a++)
  {
     echo $name[$a]."　　、";
  }
echo "<p>二維陣列變數讀取列印<p>";
  for($a=0;$a<3;$a++)
  {
       for($b=0;$b<4;$b++)
  {
     echo $_SESSION["ascore"][$a][$b]."　　、";
  }
     echo "　<p>";
  }

?>

</body>
</html>
