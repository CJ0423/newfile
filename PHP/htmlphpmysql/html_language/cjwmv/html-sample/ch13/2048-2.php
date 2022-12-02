<?php

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

//資料依指定方向移動
  if($tran=="往上")
  {
      for($y=1;$y<=4;$y++)                  //判斷若上方為空格，則資料往上移
      {
         $ty=1;
         for($x=1;$x<=4;$x++)
         {
            if($a[$x][$y]!=0)
            {
               $b[$ty][$y]=$a[$x][$y];
               $ty++;
            }
         }
      } 
      for($y=1;$y<=4;$y++)                  //判斷若上下兩格資料相同,則資料相加,其後資料往上移
      {
         if(($b[1][$y]==$b[2][$y])and($b[1][$y]!=0))
         {
            $b[1][$y]*=2;
            $b[2][$y]=$b[3][$y];
            $b[3][$y]=$b[4][$y];
            $b[4][$y]=0;
         }
         if(($b[2][$y]==$b[3][$y])and($b[2][$y]!=0))
         {
            $b[2][$y]*=2;
            $b[3][$y]=$b[4][$y];
            $b[4][$y]=0;
         }
         if(($b[3][$y]==$b[4][$y])and($b[3][$y]!=0))
         {
            $b[3][$y]*=2;
            $b[4][$y]=0;
         }
      }           
  }
  elseif($tran=="往下")
  {
      for($y=1;$y<=4;$y++)                  //判斷若下方為空格，則資料往下移
      {
         $ty=4;
         for($x=4;$x>=1;$x--)
         {
            if($a[$x][$y]!=0)
            {
               $b[$ty][$y]=$a[$x][$y];
               $ty--;
            }
         }
      } 
      for($y=1;$y<=4;$y++)                  //判斷若上下兩格資料相同,則資料相加,其後資料往下移
      {
         if(($b[4][$y]==$b[3][$y])and($b[4][$y]!=0))
         {
            $b[4][$y]*=2;
            $b[3][$y]=$b[2][$y];
            $b[2][$y]=$b[1][$y];
            $b[1][$y]=0;
         }
         if(($b[3][$y]==$b[2][$y])and($b[3][$y]!=0))
         {
            $b[3][$y]*=2;
            $b[2][$y]=$b[1][$y];
            $b[1][$y]=0;
         }
         if(($b[2][$y]==$b[1][$y])and($b[2][$y]!=0))
         {
            $b[2][$y]*=2;
            $b[1][$y]=0;
         }
      }           
  }
  elseif($tran=="往左")
  {
     for($x=1;$x<=4;$x++)                  //判斷若左方為空格，則資料往左移
     {
         $ty=1;
         for($y=1;$y<=4;$y++)
         {
            if($a[$x][$y]!=0)
            {
               $b[$x][$ty]=$a[$x][$y];
               $ty++;
            }
         }
     } 
     for($x=1;$x<=4;$x++)                  //判斷若相鄰兩格資料相同,則資料相加,其後資料往左移
     {
         if(($b[$x][1]==$b[$x][2])and($b[$x][1]!=0))
         {
            $b[$x][1]*=2;
            $b[$x][2]=$b[$x][3];
            $b[$x][3]=$b[$x][4];
            $b[$x][4]=0;
         }
         if(($b[$x][2]==$b[$x][3])and($b[$x][2]!=0))
         {
            $b[$x][2]*=2;
            $b[$x][3]=$b[$x][4];
            $b[$x][4]=0;
         }
         if(($b[$x][3]==$b[$x][4])and($b[$x][3]!=0))
         {
            $b[$x][3]*=2;
            $b[$x][4]=0;
         }
      }                
  }
  else    //往右
  {
      for($x=1;$x<=4;$x++)                  //判斷若右方為空格，則資料往右移
      {
         $ty=4;
         for($y=4;$y>=1;$y--)
         {
            if($a[$x][$y]!=0)
            {
               $b[$x][$ty]=$a[$x][$y];
               $ty--;
            }
         }
      } 
      for($x=1;$x<=4;$x++)                  //判斷若相鄰兩格資料相同,則資料相加,其後資料往右移
      {
         if(($b[$x][4]==$b[$x][3])and($b[$x][4]!=0))
         {
            $b[$x][4]*=2;
            $b[$x][3]=$b[$x][2];
            $b[$x][2]=$b[$x][1];
            $b[$x][1]=0;
         }
         if(($b[$x][3]==$b[$x][2])and($b[$x][3]!=0))
         {
            $b[$x][3]*=2;
            $b[$x][2]=$b[$x][1];
            $b[$x][1]=0;
         }
         if(($b[$x][2]==$b[$x][1])and($b[$x][2]!=0))
         {
            $b[$x][2]*=2;
            $b[$x][1]=0;
         }
      }                
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

   echo "<body bgcolor='yellow'>";
   echo "<center><h1>2048遊戲</h1>";
   echo "<table border='5'>";
   for($x=1;$x<=4;$x++)
   {
      echo "<tr>";
      for($y=1;$y<=4;$y++)
      {
          if($b[$x][$y]==0)
          {
              echo "<td bgcolor='#FFFFFF' width='110' height='110' align='center' valign='middle'></td>";
          }
          elseif($b[$x][$y]==2)
          {
              echo "<td bgcolor='#0000FF' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==4)
          {
              echo "<td bgcolor='#00FF00' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==8)
          {
              echo "<td bgcolor='#FF0000' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==16)
          {
              echo "<td bgcolor='#00FFFF' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==32)
          {
              echo "<td bgcolor='#FF00FF' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==64)
          {
              echo "<td bgcolor='#FFFF00' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==128)
          {
              echo "<td bgcolor='#0000CC' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==256)
          {
              echo "<td bgcolor='#00CC00' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==512)
          {
              echo "<td bgcolor='#CC0000' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==1024)
          {
              echo "<td bgcolor='#00CCCC' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==2048)
          {
              echo "<td bgcolor='#CC00CC' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</td>";
          }
          elseif($b[$x][$y]==4096)
          {
              echo "<td bgcolor='#CCCC00' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }    
          elseif($b[$x][$y]==8192)
          {
              echo "<td bgcolor='#00FFCC' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          elseif($b[$x][$y]==16384)
          {
              echo "<td bgcolor='#00CCFF' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</font></td>";
          }
          else
          {
              echo "<td bgcolor='#FF00CC' width='110' height='110' align='center' valign='middle'><font size='7'>".$b[$x][$y]."</td>";
          } 
      }   
      echo "</tr>";
   }
   echo "</table>";

//傳送表單設定
if($endnotice=="遊戲結束")
{
   echo "<br><br><form method='post' action='2048-1.php'>";
   echo $endnotice."<br>";
  echo "<input type='submit' name='tran' value='繼續下一局'>　　";
   echo "</form></center>";
}
else
{
   echo "<br><br><form method='post' action='2048-2.php'>";
   for($x=1;$x<=4;$x++)
   {
      for($y=1;$y<=4;$y++)
      {
        echo "<input type='hidden' name='a".$x.$y."' value='".$b[$x][$y]."'>";
      }
   }
   echo "<input type='submit' name='tran' value='往上'>　　";
   echo "<input type='submit' name='tran' value='往下'>　　";

   echo "<input type='submit' name='tran' value='往左'>　　";
   echo "<input type='submit' name='tran' value='往右'>　　";
   echo "</form></center>";
 }  
?>
