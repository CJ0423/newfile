<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>清單/選單控制項</title>
</head>

<body>
<?php 
///////  接收資料 (取得表單中所輸入對應欄位中的資料) /////////////////
$uname=$_POST["uname"];
$select1=$_POST["select1"];
//將陣列資料指定給$arr變數
    $arr=$_POST["select2"];

/////////////////  列印資料  ///////////////// 
echo $uname."你好:<p>";
echo "你的職稱是 : ";
echo $select1."<p>";
echo "喜歡的水果有以下這些 : <p>";
    //以print_r函數顯示陣列資料
    print_r($arr);
?>

</body>
</html>
