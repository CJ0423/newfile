<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>正規表示式</title>
</head>
<body>

<?php 
//二個原始字串陣列
$id=array("f123456789","p561098789",1288);
$mail=array("service@hotmail.com.tw","linda@123454","1234@hinet.com");

//定義樣式
$ptn1="[a-z]{1}[1-2]{1}[0-9]{8}";

for($a=0;$a<count($id);$a++){
  //每個元素一一比較身分證字號
	if(ereg($ptn1,$id[$a])){
		echo  $id[$a]." => 格式正確<p>";
	}else{
		echo $id[$a]." => 格式不正確<p>";
	}
}
//找尋開頭可以是任何英文或數值,接著有一個@其後還有一個點
$ptn2="^[[:alnum:]]+@[[:alnum:]]+\.";

for($a=0;$a<count($mail);$a++){
  //每個元素一一比較email帳號
	if(ereg($ptn2,$mail[$a])){
		echo  $mail[$a]." => 格式正確<p>";
	}else{
		echo $mail[$a]." => 格式不正確<p>";
	}
}
?>

</body>
</html>
