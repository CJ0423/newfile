﻿<?php
   $sco=array( 86,75,93,80,55,68,72,70,88,61);  //陣列索引 0 ~ 9
echo "排序結果 (由小到大) 如下：<br>";
   For($x=0;$x<=8;$x++)            //外圈(0~n-2)，從第1筆到 倒數第2筆
   {
       For($y=$x+1;$y<=9;$y++)     //內圈($x+1~n-1)，從第$x+1筆到最後一筆
       {
           If($sco[$x]>$sco[$y])   //如果「比較者數字」>「被比較者數字」，則
           {
              $borrow=$sco[$x];    //進行資料互換
              $sco[$x]=$sco[$y];
              $sco[$y]= $borrow;
           }
       }
      Echo $sco[$x]." < ";
   }
Echo $sco[$x];
?>