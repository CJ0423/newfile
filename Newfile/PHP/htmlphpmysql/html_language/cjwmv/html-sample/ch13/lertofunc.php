<?php
  //
  //�]�w�︹��� $x�G�`���ơA$y�G��X�ƶq
  //
function lerto($x,$y)
{
  //
  //�]�w�m���ư}�C
  //
     for($a=1;$a<=$x;$a++)
     {
        $lertonum1[$a]=$a;     //�Ĥ@�ϸ��X
     }
  //
  //�}�l���͸��X
  //
    $y1=$x-$y;
    for($a=$x;$a>$y1;$a--)            //����?�鲣��6�Ӹ��X
    {
      $k=rand(1,$a);                  //�q1~$a���H�����ͤ@�ӼƦr
      $ans[]=$lertonum1[$k];        //�N��$k��m�����X���,�������ư}�C
      $lertonum1[$k]=$lertonum1[$a];  //$k��m�����X�v�Q�����A�i�N�̫�@�Ӧ�m�����X���ܦ���m
    }
      sort($ans);
      return $ans;
}
  //
  //�����e�x�ǰe���
  //
$sen=$_POST["sen"];

  //
  //�P�_�ֱm�����β��͹������X
  //
if($sen=="�¤O�m")
{
     $ans=lerto(38,6);

    //�ĤG��8��1
    //
      $ans2=rand(1,8);                  //�q1~8���H�����ͤ@�ӼƦr
      $p=6;   //�C�L��Ƶ��ƥ�
}
elseif($sen=="�j�ֳz")
{
      $ans=lerto(49,6);
      $p=6;   //�C�L��Ƶ��ƥ�
}
else
{
      $ans=lerto(39,5);
      $p=5;   //�C�L��Ƶ��ƥ�
}

  //
  //�C�L����
  //
  echo "<h1>".$sen."</h1>";
  echo "�q�����A���ͪ����X�p�U:<br>�Ĥ@��:";
for($a=0;$a<$p;$a++)
{
  echo $ans[$a].",";
}
  echo "<br>";
  if($sen=="�¤O�m")
  {
    echo "�ĤG�ϸ��X:".$ans2."<br>";
  }

?>