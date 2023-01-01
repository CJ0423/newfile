<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>猜數字遊戲(一)</title>
</head>
<body>
<?php
//產生一組４位不重覆數字
  $p=array(0,1,2,3,4,5,6,7,8,9);
  for($a=9;$a>5;$a--)
  {
    $k=rand(0,$a);
    $ti[9-$a]=$p[$k];//$ti為題目數字
    $p[$k]=$p[$a];
  }
//////////////////////   資料加密   //////////////////////////////
///////////  1.資料倒置

for($a=0;$a<4;$a++)
{
    $ti[$a]=9-$ti[$a];
}
//////////    2.往左移一位

    $k=$ti[0];
    $ti[0]=$ti[1];
    $ti[1]=$ti[2];
    $ti[2]=$ti[3];
    $ti[3]=$k;
/////////////////////////////// 連結成字串  //////////////////////

    $tp=$ti[0].$ti[1].$ti[2].$ti[3];//列印所產生的數字

//////////////   登錄遊戲開始時間   //////////////////////////////
   $fisc=time();
$info=localtime($fisc,true);
echo "猜答開始時間:".($info["tm_year"]+1900)."年".($info["tm_mon"]+1)."月".$info["tm_mday"]."日".($info["tm_hour"]+7)."點".$info["tm_min"]."分".$info["tm_sec"]."秒<br>";
/////////////////////////////////////////////////////////////////

//進行遊戲
echo "<font color='#0000ff'><h1>猜數字遊戲</h1></font><br>";
echo "<form method='post' action='guess_ob.php'>";
  //題目數字在 tan
echo "題目數字:<input type='password' name='tan' value=".$tp." size='4' >　　　　結果<br>";
echo "<input type='hidden' name='tp' value=".$tp." size='4' ><br>";   //題目在   tp
echo "<input type='hidden' name='coti' value='1' size='4'><br>";      //猜測次數 octi
echo "第1 次猜:<input type='text' name='ans' size='4' ><br>";         //猜測答案 ans
echo "<input type='submit' name='submit' value='送出'>";

//////////////////////////////////////////////////////////////////////////////////////////////
   echo "<input type='hidden' name='fisc' value='".$fisc."' <br>";      //遊戲開始時間
//////////////////////////////////////////////////////////////////////////////////////////////

echo "</form>";
?>

</body>
</html>
