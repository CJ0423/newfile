<?php
  function swap($x,$y){
    $temp=$x;
    $x=$y;
    $y=$temp;
      return ($x+$y)/2;   //return的意義就是在於把資料放回去後，所產生的結果，因此若要使用return必須要有回傳的數值喔。
  }

  function swap1($x=20,$y=30){
    $temp=$x;
    $x=$y;
    $y=$temp;
     echo ($x+$y)/2;   //return的意義就是在於把資料放回去後，所產生的結果，因此若要使用return必須要有回傳的數值喔。
     return ($x+$y)/2; 
  }
  $average=Swap(80,60);
  echo "回傳的平均值為". $average;
  Swap1(80,60);
  $general=Swap1();
  echo $general;
?>
