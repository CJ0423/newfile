<?php
include("clin2048.inc");
include("clin2048-1.inc");
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
  else    //���k
  {
    $b=$move->right($a,$b);
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

   //�w�q���
   fu2048($b);

//�ǰe���]�w
if($endnotice=="�C������")
{
   echo "<br><br><form method='post' action='func2048-1.php'>";
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
