<?php
//設定物件宣告
class admo
{
   function admoup($b)
   {
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
      return $b;
   }

   function admodown($b)
   {
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
      return $b; 
   }

   function admoleft($b)
   {
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
      return $b;
   }

   function admoright($b)
   {
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
      return $b;
   }
   
}
class move extends admo
{
   function up($a,$b)
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
      $b=parent::admoup($b);
      return $b;               
   }

   function down($a,$b)
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
      $b=parent::admodown($b);
      return $b;              
   }

   function left($a,$b)
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
      $b=parent::admoleft($b);
      return $b;                
   }

   function right($a,$b)
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
      $b=parent::admoright($b);
      return $b;                    
   }
}

?>