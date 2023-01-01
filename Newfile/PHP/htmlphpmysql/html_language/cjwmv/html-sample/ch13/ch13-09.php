<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>不定名稱函數</title>
</head>
<body>
<h2>不定名稱函數</h2>

<?php 
//轉換成為二進位
function bin($n)
{
  	echo "二進位表示 : ".decbin($n);
}
//轉為八進位
function oct($n)
{
  	echo "八進位表示 : ".decoct($n);
}
//轉為十六進位
function hex($n)
{
  	echo "十六進位表示 : ".dechex($n);
}

//取得表單傳遞過來的資料
$nm=$_POST["number"]; //取得傳送過來的數值
$choose=$_POST["transform"];//取得要轉換的目標

echo "輸入的數值是 : ".$nm."<br/>";
echo "選取的模式是 : ".$choose."<p>";

//呼叫不定名稱函數
//依不同的變數值去呼叫不同的函數
//此處呼叫函數，進而產生資料。
	//由於函數的名字一開始就不知道，故此需要將資料送過去之後才能產生新的
	$choose($nm);

?>

</body>
</html>
