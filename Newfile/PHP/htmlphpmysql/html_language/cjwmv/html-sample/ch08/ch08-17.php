<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Checkbox核取方塊</title>
</head>
<body>
<?php 
///////  接收資料 (取得表單中所輸入對應欄位中的資料) /////////////////
$uname=$_POST["uname"];
for($x=1;$x<7;$x++)
{ 
           $str="box".$x;  //box與索引值合併成新字串
//利用isset函數判定核取方塊是否被選取
          if(isset($_POST[$str]))
          {//true表示有被選取
	   $box[]=$_POST[$str];
          }
}
/////////////////  列印資料  ///////////////// 
echo $uname." 會員:<p>";
echo "你喜歡的新聞頻道有:<p>";
    
//for重覆結構
for($x=1;$x<count($box);$x++)
{
          echo  $box[$x]." , ";
       }
}
?>

</body>
</html>
