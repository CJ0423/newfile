<?php

///////////////////////////////////////////////////////////////////////////
//
//                   2048�C��
//
///////////////////////////////////////////////////////////////////////////

//�����ǰe���
   for($x=1;$x<=4;$x++)                      //�����}�C���
   {
      for($y=1;$y<=4;$y++)
      {
         $trname="a".$x.$y;
         $a[$x][$y]=$_POST[$trname];
      }
   }

   $tran=$_POST["tran"];         //�������ʤ�V���

//�]�w $b(4*4�}�C)
   for($x=1;$x<=4;$x++)                      
   {
      for($y=1;$y<=4;$y++)
      {
         $b[$x][$y]=0;
      }
   }

//��ƨ̫��w��V����
  if($tran=="���W")
  {
      for($y=1;$y<=4;$y++)                  //�P�_�Y�W�謰�Ů�A�h��Ʃ��W��
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
      for($y=1;$y<=4;$y++)                  //�P�_�Y�W�U����ƬۦP,�h��Ƭۥ[,����Ʃ��W��
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
  elseif($tran=="���U")
  {
      for($y=1;$y<=4;$y++)                  //�P�_�Y�U�謰�Ů�A�h��Ʃ��U��
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
      for($y=1;$y<=4;$y++)                  //�P�_�Y�W�U����ƬۦP,�h��Ƭۥ[,����Ʃ��U��
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
  elseif($tran=="����")
  {
     for($x=1;$x<=4;$x++)                  //�P�_�Y���謰�Ů�A�h��Ʃ�����
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
     for($x=1;$x<=4;$x++)                  //�P�_�Y�۾F����ƬۦP,�h��Ƭۥ[,����Ʃ�����
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
  else    //���k
  {
      for($x=1;$x<=4;$x++)                  //�P�_�Y�k�謰�Ů�A�h��Ʃ��k��
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
      for($x=1;$x<=4;$x++)                  //�P�_�Y�۾F����ƬۦP,�h��Ƭۥ[,����Ʃ��k��
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

//�]�w�s�Ʀr�}�C ���� 35
  for($i=1;$i<=30;$i++)
  {
    $newnu[$i]=2;
  }
    $newnu[]=4;
    $newnu[]=4;
    $newnu[]=4;
    $newnu[]=4;
    $newnu[]=8;

//�έp�ŭȰ}�C
//    �}�C��m�Ȥ��O��    1   2   3   4
//                        5   6   7   8
//                        9  10  11  12
//                       13  14  15  16
//  �ҥH ��m�ȹ����}�C���ޮy�Ь�  ($x-1)*4+$y
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

$endnotice="�C������";
if(@count($emptyarr)!=0)
{
   //���ͷs�Ʀr
     $newnumber=$newnu[rand(1,35)];

   //��X���@�Ů�
       $k=rand(0,count($emptyarr)-1);                //�H������@�Ӧ�m

       $y=($emptyarr[$k]%4);          //�p������m�� $y ���ޭ�
       if($y==0)                           //�ץ�$y��
       {
         $y=4;
       }
       $x=(int)(($emptyarr[$k]-$y)/4)+1;   //�p������m�� $x ���ޭ�

       $b[$x][$y]=$newnumber;        //�N�s�Ƹm�J�ӪŮ椤
       $endnotice="";
}

//�C�L2048��l�e��

   echo "<body bgcolor='yellow'>";
   echo "<center><h1>2048�C��</h1>";
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

//�ǰe���]�w
if($endnotice=="�C������")
{
   echo "<br><br><form method='post' action='2048-1.php'>";
   echo $endnotice."<br>";
  echo "<input type='submit' name='tran' value='�~��U�@��'>�@�@";
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
   echo "<input type='submit' name='tran' value='���W'>�@�@";
   echo "<input type='submit' name='tran' value='���U'>�@�@";

   echo "<input type='submit' name='tran' value='����'>�@�@";
   echo "<input type='submit' name='tran' value='���k'>�@�@";
   echo "</form></center>";
 }  
?>
