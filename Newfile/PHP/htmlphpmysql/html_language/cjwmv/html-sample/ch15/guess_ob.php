<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>猜數字遊戲(一)</title>
</head>
<body>
<?php
////////////////////////////////////////////////////////////////
//
//     宣告類別  acep(接收資料)
//
///////////////////////////////////////////////////////////////

class acep
{
   var $cds;  //已猜答案之判斷(變數陣列)
   var $bn;    //已猜答案資料(變數陣列)

   function accep($n)      //接收已猜答案及判斷資料   
   {
     for($a=1;$a<$n;$a++)
     {
        $alb="anb".$a;  
        $this->cds[$a]=$_POST[$alb];
        $ala="ans".$a;         //ans+n 為己答次數在表單中的name
        $this->bn[$a]=$_POST[$ala];  //$bn[n]為php已答次數答案
     }
   }
   function Acomp($tu,$ta)     //A判斷函數
   {
      $at=0;
      for($k=0;$k<4;$k++)
      {
         if($tu[$k]==$ta[$k]){$at++;}   //只比較相同位置
      }
      return $at;
   }
   function bcomp($tu,$ta)     //B判斷函數
   {
      $tb=0;
      for($j=0;$j<4;$j++)
      {
        for($j1=0;$j1<4;$j1++)
        {
          if($j<>$j1)            //相同位置不比較
          {
             if($tu[$j]==$ta[$j1]){$tb++;}   
          }
        }
      }
      return $tb;
   }
}//end acep

////////////////////////////////////////////////////////////////////////////

$aalink=new acep;  //設定物件連結變數

//////////////   登錄遊戲開始時間   //////////////////////////////
   $fisc=$_POST["fisc"];
$info=localtime($fisc,true);
echo "猜答開始時間:".($info["tm_year"]+1900)."年".($info["tm_mon"]+1)."月".$info["tm_mday"]."日".($info["tm_hour"]+7)."點".$info["tm_min"]."分".$info["tm_sec"]."秒<br>";
/////////////////////////////////////////////////////////////////

//接收資料
 $tp=$_POST["tp"];      //$tp 為題目數字
 $coti=$_POST["coti"];  //$coti為猜測次數
 $ank=$_POST["ans"];    //$ans為最新一次答案

 if($coti>=2)            //如果猜測次超過1次，接收前面次的資料
  {
      $aalink->accep($coti); 
      $bn=$aalink->bn;
      $ttal=$aalink->cds;
  }

    $bn[$coti]=$ank;       //最近一次的答案

//比較本次猜答結果
$tu=str_split($tp);           //拆解題目數字
$ta=str_split($ank);          //拆解猜答數字
//開始比較(數字對，位置也對
$at=$aalink->Acomp($tu,$ta);                     //計算 xA

//比較數字對，但位置不對
$tb=$aalink->bcomp($tu,$ta);                     //計算  xB

//將比較結果放入$tta
$tta=$at."A".$tb."B";
      $ttal[$coti]=$tta;     //最近一次的判斷結果

//猜測結果成功
if($at==4)
{
   echo "<font color='#0000ff'><h1>猜數字遊戲<br>";
   echo "題目數字：".$tp."</h1><br>";

///////////////////////////////////////      猜答時間  //////////////////////////////////////////////////////////
$clsc=time();
$info=localtime($fisc,true);
echo "猜答開始時間:".($info["tm_year"]+1900)."年".($info["tm_mon"]+1)."月".$info["tm_mday"]."日".($info["tm_hour"]+7)."點".$info["tm_min"]."分".$info["tm_sec"]."秒<br>";
$info=localtime($clsc,true);
echo "猜答結束時間:".($info["tm_year"]+1900)."年".($info["tm_mon"]+1)."月".$info["tm_mday"]."日".($info["tm_hour"]+7)."點".$info["tm_min"]."分".$info["tm_sec"]."秒<br>";
echo "猜答花費時間為:".(int)(($clsc-$fisc)/60)."分".(($clsc-$fisc)%60)."秒<br>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
   echo "<h2>恭喜您答對了! 您總共猜了".$coti."次! 您的答案依序為:</h2></font><br>";
   for($i=1;$i<=$coti;$i++)
     {
       echo "第".$i." 次: ".$bn[$i]."　　為：　　".$ttal[$i]."<br>";
     }
}
else
{
   //再次顯示猜測表單
   echo "<font color='#0000ff'><h1>猜數字遊戲</h1></font><br>";
   echo "<form method='post' action='guess_ob.php'>";
     //題目數字在 tan
   echo "題目數字:<input type='password' name='tan' value=".$tp." size='4' >　　猜測結果<br>";  //測試完成要改成password
   echo "<input type='hidden' name='tp' value=".$tp." size='4' ><br>";    //tp為題目數字



   $coti++;  //已答次數累加
   for($b=1;$b<$coti;$b++)
    {
      $ala="ans".$b;               //ans+n 為己答次數在表單中的name
      $alb="anb".$b;               //anb+n　為猜測判斷結果
      echo "第".$b."次猜:<input type='text' name=".$ala." value=".$bn[$b]." size='4' readonly >";
      echo "　　　　<input type='text' name='".$alb."' value='".$ttal[$b]."' size='4' readonly ><br>";
    }

  echo "<input type='hidden' name='coti' value=".$coti." size='4'><br>";     
  echo "第".$coti."次猜:<input type='text' name='ans' size='4' ><br>";
  echo "<input type='submit' name='submit' value='送出'>";

//////////////////////////////////////////////////////////////////////////////////////////////
   echo "<input type='hidden' name='fisc' value='".$fisc."' <br>";      //遊戲開始時間
//////////////////////////////////////////////////////////////////////////////////////////////

  echo "</form>";
}
?>

</body>
</html>
