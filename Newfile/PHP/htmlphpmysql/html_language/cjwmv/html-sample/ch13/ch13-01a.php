<?php
  function swap($a,$b)   //一般函數(没有提供資料，以程式中預設值代入運算
  {                  //兩個資料交換
    $temp=$a;
    $a=$b;
    $b=$temp;
    echo "\$a=".$a."<br/>";
    echo "\$b=".$b."<br/>";    
  }
  function swap1($a=20,$b=60)   //直接設定參數值代入運算
  {                  //兩個資料交換
    $temp=$a;
    $a=$b;
    $b=$temp;
    echo "\$a=".$a."<br/>";
    echo "\$b=".$b."<br/>";    
  }
  Swap(80,60);
  Swap1(80,60);
  Swap1();
?>
