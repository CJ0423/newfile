<?php
include("clfs2048.inc");
include("clfs2048-1.inc");

//計算空值陣列數
function emptycount($b)
{
   $etyc=0;
   for($x=1;$x<=4;$x++)
   {
      for($y=1;$y<=4;$y++)
      {
         if($b[$x][$y]==0)
         {
            $etyc++;
         }
      }
   }
   return $etyc;
}

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
  if($tran=="up"){    $b=$move->up($a,$b);   }
  if($tran=="down"){  $b=$move->down($a,$b); }
  if($tran=="left"){  $b=$move->left($a,$b); }
  if($tran=="right"){ $b=$move->right($a,$b);}

//計算陣列空值數
 $etya=emptycount($b);

//判斷遊戲是否結束
if($etya==0)
{
  $testempty=new admo;
  if(($tran=="up") or ($tran=="down"))
  {
      $btest=$testempty->admoleft($b);
      $etyb=emptycount($btest);           
  }
  else
  {
      $btest=$testempty->admoup($b);
      $etyb=emptycount($btest);  
  }
}

$endnotice="遊戲結束";      //設定遊戲結束通知變數

if($etya!=0)    //遊戲未結束
{
   //設定新數字陣列 長度 35
   for($i=1;$i<=60;$i++)
   {
     $newnu[$i]=2;
   }
     $newnu[]=4;
     $newnu[]=4;
     $newnu[]=4;
     $newnu[]=4;
     $newnu[]=8;

   //設定空值陣列位置
   //    陣列位置值分別為    1   2   3   4
   //                        5   6   7   8
   //                        9  10  11  12
   //                       13  14  15  16
   //  所以 位置值對應陣列索引座標為  ($x-1)*4+$y
  
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
   //產生新數字
     $newnumber=$newnu[rand(1,65)];

   //抽出任一空格
       $k=rand(0,count($emptyarr)-1);                //隨機抽取一個位置

       $y=($emptyarr[$k]%4);          //計算選取位置的 $y 索引值
       if($y==0)                           //修正$y值
       {
         $y=4;
       }
       $x=(int)(($emptyarr[$k]-$y)/4)+1;   //計算選取位置的 $x 索引值

       $b[$x][$y]=$newnumber;        //將新數置入該空格中
       $endnotice="";     //變更遊戲結束通知變數值(未結束)
}
if(($etya==0) and ($etyb!=0))
{
    $endnotice="";     //變更遊戲結束通知變數值(未結束)  
}

//列印2048初始畫面

   //定義函數
   fu2048($b);

//傳送表單設定
if($endnotice=="遊戲結束")
{
   echo "<br><br><form method='post' action='clafs2048-1.php'>";
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
