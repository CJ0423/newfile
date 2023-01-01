<?php
include("clin2048.inc");
include("clin2048-1.inc");
///////////////////////////////////////////////////////////////////////////
//
//                   2048遊戲
//
///////////////////////////////////////////////////////////////////////////

//接收傳送資料
   for($x=1;$x<=4;$x++)                      //接收陣列資料
   {
      for($y=1;$y<=4;$y++)
      {
         $trname="a".$x.$y;
         $a[$x][$y]=$_POST[$trname];
      }
   }

   $tran=$_POST["tran"];         //接收移動方向資料

//設定 $b(4*4陣列)
   for($x=1;$x<=4;$x++)                      
   {
      for($y=1;$y<=4;$y++)
      {
         $b[$x][$y]=0;
      }
   }



$move=new move;

//資料依指定方向移動
  if($tran=="up")
  {
    $b=$move->up($a,$b);
  }
  elseif($tran=="down")
  {
    $b=$move->down($a,$b);
  }
  elseif($tran=="left")
  {
    $b=$move->left($a,$b);
  }
  else    //往右
  {
    $b=$move->right($a,$b);
  }

//設定新數字陣列 長度 35
  for($i=1;$i<=30;$i++)
  {
    $newnu[$i]=2;
  }
    $newnu[]=4;
    $newnu[]=4;
    $newnu[]=4;
    $newnu[]=4;
    $newnu[]=8;

//統計空值陣列
//    陣列位置值分別為    1   2   3   4
//                        5   6   7   8
//                        9  10  11  12
//                       13  14  15  16
//  所以 位置值對應陣列索引座標為  ($x-1)*4+$y
//

for($x=1;$x<=4;$x++)
{
   for($y=1;$y<=4;$y++)
   {
      if($b[$x][$y]==0)
      {
         $k=($x-1)*4+$y;
         $emptyarr[]=$k;
      }
    }
}

$endnotice="遊戲結束";
if(@count($emptyarr)!=0)
{
   //產生新數字
     $newnumber=$newnu[rand(1,35)];

   //抽出任一空格
       $k=rand(0,count($emptyarr)-1);                //隨機抽取一個位置

       $y=($emptyarr[$k]%4);          //計算選取位置的 $y 索引值
       if($y==0)                           //修正$y值
       {
         $y=4;
       }
       $x=(int)(($emptyarr[$k]-$y)/4)+1;   //計算選取位置的 $x 索引值

       $b[$x][$y]=$newnumber;        //將新數置入該空格中
       $endnotice="";
}

//列印2048初始畫面

   //定義函數
   fu2048($b);

//傳送表單設定
if($endnotice=="遊戲結束")
{
   echo "<br><br><form method='post' action='func2048-1.php'>";
   echo $endnotice."<br>";
   echo "<input type='submit' name='tran' value='繼續下一局'>　　";
   echo "</form></center>";
}
else
{
   form2048($b);
   echo "</center>";
 }  
?>
