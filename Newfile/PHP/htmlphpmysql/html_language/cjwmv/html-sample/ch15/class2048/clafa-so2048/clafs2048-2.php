<?php
include("clfs2048.inc");
include("clfs2048-1.inc");

//�p��ŭȰ}�C��
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



$move=new move;

//��ƨ̫��w��V����
  if($tran=="up"){    $b=$move->up($a,$b);   }
  if($tran=="down"){  $b=$move->down($a,$b); }
  if($tran=="left"){  $b=$move->left($a,$b); }
  if($tran=="right"){ $b=$move->right($a,$b);}

//�p��}�C�ŭȼ�
 $etya=emptycount($b);

//�P�_�C���O�_����
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

$endnotice="�C������";      //�]�w�C�������q���ܼ�

if($etya!=0)    //�C��������
{
   //�]�w�s�Ʀr�}�C ���� 35
   for($i=1;$i<=60;$i++)
   {
     $newnu[$i]=2;
   }
     $newnu[]=4;
     $newnu[]=4;
     $newnu[]=4;
     $newnu[]=4;
     $newnu[]=8;

   //�]�w�ŭȰ}�C��m
   //    �}�C��m�Ȥ��O��    1   2   3   4
   //                        5   6   7   8
   //                        9  10  11  12
   //                       13  14  15  16
   //  �ҥH ��m�ȹ����}�C���ޮy�Ь�  ($x-1)*4+$y
  
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
   //���ͷs�Ʀr
     $newnumber=$newnu[rand(1,65)];

   //��X���@�Ů�
       $k=rand(0,count($emptyarr)-1);                //�H������@�Ӧ�m

       $y=($emptyarr[$k]%4);          //�p������m�� $y ���ޭ�
       if($y==0)                           //�ץ�$y��
       {
         $y=4;
       }
       $x=(int)(($emptyarr[$k]-$y)/4)+1;   //�p������m�� $x ���ޭ�

       $b[$x][$y]=$newnumber;        //�N�s�Ƹm�J�ӪŮ椤
       $endnotice="";     //�ܧ�C�������q���ܼƭ�(������)
}
if(($etya==0) and ($etyb!=0))
{
    $endnotice="";     //�ܧ�C�������q���ܼƭ�(������)  
}

//�C�L2048��l�e��

   //�w�q���
   fu2048($b);

//�ǰe���]�w
if($endnotice=="�C������")
{
   echo "<br><br><form method='post' action='clafs2048-1.php'>";
   echo $endnotice."<br>";
   echo "<input type='submit' name='tran' value='�~��U�@��'>�@�@";
   echo "</form></center>";
}
else
{
   form2048($b);
   echo "</center>";
 }  
?>
