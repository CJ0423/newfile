<?php
  //
  //設定選號函數 $x：總號數，$y：選出數量
  //
function lerto($x,$y)
{
  //
  //設定彩券資料陣列
  //
     for($a=1;$a<=$x;$a++)
     {
        $lertonum1[$a]=$a;     //第一區號碼
     }
  //
  //開始產生號碼
  //
    $y1=$x-$y;
    for($a=$x;$a>$y1;$a--)            //應用?圈產生6個號碼
    {
      $k=rand(1,$a);                  //從1~$a間隨機產生一個數字
      $ans[]=$lertonum1[$k];        //將第$k位置的號碼資料,放到選取資料陣列
      $lertonum1[$k]=$lertonum1[$a];  //$k位置的號碼己被取走，可將最後一個位置的號碼移至此位置
    }
      sort($ans);
      return $ans;
}
  //
  //接收前台傳送資料
  //
$sen=$_POST["sen"];

  //
  //判斷樂彩種類及產生對應號碼
  //
if($sen=="威力彩")
{
     $ans=lerto(38,6);

    //第二區8選1
    //
      $ans2=rand(1,8);                  //從1~8間隨機產生一個數字
      $p=6;   //列印資料筆數用
}
elseif($sen=="大樂透")
{
      $ans=lerto(49,6);
      $p=6;   //列印資料筆數用
}
else
{
      $ans=lerto(39,5);
      $p=5;   //列印資料筆數用
}

  //
  //列印報表
  //
  echo "<h1>".$sen."</h1>";
  echo "電腦為你產生的號碼如下:<br>第一區:";
for($a=0;$a<$p;$a++)
{
  echo $ans[$a].",";
}
  echo "<br>";
  if($sen=="威力彩")
  {
    echo "第二區號碼:".$ans2."<br>";
  }

?>