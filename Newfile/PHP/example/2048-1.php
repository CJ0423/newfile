<?php

///////////////////////////////////////////////////////////////////////////
//
//                   2048�C��
//
///////////////////////////////////////////////////////////////////////////

//�]�w�@��4*4���ťհ}�C

for($x=1;$x<=4;$x++)
{
   for($y=1;$y<=4;$y++)
   {
       $a[$x][$y]=0;
   }
}

//�]�w�}�C��m�Ȥ��O��    1   2   3   4
//                        5   6   7   8
//                        9  10  11  12
//                       13  14  15  16
//  �ҥH ��m�ȹ����}�C���ޮy�Ь�  ($x-1)*4+$y
//

//�]�w�}�C�ŭȦ�m�}�C

  for($p=1;$p<=16;$p++)
  {
     $emptyarr[$p]=$p;
  }

//�H�������Ӧ�m�m���

  for($se=16;$se>=15;$se--)
  {
    $k=rand(1,$se);                //�H������@�Ӧ�m

    $y=($emptyarr[$k]%4);          //�p������m�� $y ���ޭ�
    if($y==0)                           //�ץ�$y��
    {
      $y=4;
    }
    $x=(int)(($emptyarr[$k]-$y)/4)+1;   //�p������m�� $x ���ޭ�

    $a[$x][$y]=2;                  //�ܧ�����m���}�C��ƭ�
    $emptyarr[$k]=$emptyarr[$se];  //�N�̫�@�Ӧ�m��ƭȲ���w�Q�������m��
  }

//�C�L2048��l�e��
   //�w�q���
   function prin2048($a,$b)
   {
       echo "<td bgcolor='".$a."' width='110' height='110' align='center' valign='middle'><font size='7'>".$b."</font></td>";
   }

   echo "<body bgcolor='yellow'>";
   echo "<center><h1>2048�C��</h1>";
   echo "<table border='5'>";
   for($x=1;$x<=4;$x++)
   {
      echo "<tr>";
      for($y=1;$y<=4;$y++)
      {
          if($a[$x][$y]==0)
          {
              prin2048("#FFFFFF","");
          }
          elseif($a[$x][$y]==2)
          {
              prin2048("#0000FF",2);
          }
          elseif($a[$x][$y]==4)
          {
              prin2048("#00FF00",4);
          }
          elseif($a[$x][$y]==8)
          {
              prin2048("#FF0000",8);
          }
          elseif($a[$x][$y]==16)
          {
              prin2048("#00FFFF",16);
          }
          elseif($a[$x][$y]==32)
          {
              prin2048("#FF00FF",32);
          }
          elseif($a[$x][$y]==64)
          {
              prin2048("#FFFF00",64);
          }
          elseif($a[$x][$y]==128)
          {
              prin2048("#0000cc",128);
          }
          elseif($a[$x][$y]==256)
          {
              prin2048("#00cc00",256);
          }
          elseif($a[$x][$y]==512)
          {
              prin2048("#cc0000",512);
          }
          elseif($a[$x][$y]==1024)
          {
              prin2048("#00cccc",1024);
          }
          elseif($a[$x][$y]==2048)
          {
              prin2048("#cc00cc",2048);
          }
          elseif($a[$x][$y]==4096)
          {
              prin2048("#cccc00",4096);
          }    
          elseif($a[$x][$y]==8192)
          {
              prin2048("#00FFcc",8192);
          }
          elseif($a[$x][$y]==16384)
          {
              prin2048("#00ccFF",16384);
          }
          else
          {
              prin2048("#FF00cc",32768);
          } 
      }   
      echo "</tr>";
   }
   echo "</table>";

//�ǰe����]�w

   echo "<br><br><form method='post' action='2048-2.php'>";
   for($x=1;$x<=4;$x++)
   {
      for($y=1;$y<=4;$y++)
      {
        echo "<input type='hidden' name='a".$x.$y."' value='".$a[$x][$y]."'>";
      }
   }
   echo "<input type='submit' name='tran' value='���W'>�@�@";
   echo "<input type='submit' name='tran' value='���U'>�@�@";

   echo "<input type='submit' name='tran' value='����'>�@�@";
   echo "<input type='submit' name='tran' value='���k'>�@�@";
   echo "</form></center>";
?>