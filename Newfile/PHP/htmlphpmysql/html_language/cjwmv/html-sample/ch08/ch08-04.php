<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>資料類型</title>
</head>
<body>

<?php 
  $var1=566;
  $var2=5.66E+5;
  $var3="This a string.";
  $var4=566.0;
  
  //以gettype()函數,輸出對應的資料類型
  echo "566 的資料型態：";
  echo "<font color=blue>".gettype($var1)."</font><br>";
  echo "5.66E+5 的資料型態：";
  echo "<font color=blue>".gettype($var2)."</font><br>";
  echo '"This a string."的資料型態：';
  echo "<font color=blue>".gettype($var3)."</font><br>";
  echo "566.0 的資料型態：";
  echo "<font color=blue>".gettype($var4)."</font><br>";

?>

</body>
</html>
