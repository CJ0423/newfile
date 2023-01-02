﻿<?php
//設定月份名稱陣列
$monthname=array("","一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月");
//設定月份日數陣列
$monthdays=array(0,31,28,31,30,31,30,31,31,30,31,30,31);

//讀取基本資料,並指定給相對應的變數
$y=$_POST["yea"]; 

//判斷閏年或平年並設定每月日數
if((($y%400)==0)or((($y%100)<>0)and(($y%4)==0)))
{
 $monthdays[2]=29;
}

//判斷該年元旦指標位置
$n4=(int)(($y-1)/4);
$n100=(int)(($y-1)/100);
$n400=(int)(($y-1)/400);
$ns=$n4-$n100+$n400;      //計算閏年數
$nl=$y-1-$ns;             //計算平年數

$dall=$ns*2+$nl;          //總移動天數(或 $dall=($y-1)+$ns)
$po=($dall+1)%7;           //元旦指標  

echo "<h1>西元　".$y."　年</h1>";

////////// 十二個月份廻圈 ////////////
for($m=1;$m<=12;$m++)
{
  echo "<h2>".$monthname[$m]."</h2>";  //月份名稱

  echo "<table width='280' border='1'>";
  echo "<tr align='right'><td><font color='red'>SUN</font></td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td><font color='red'>SAT</font></td></tr><tr>";
                            //紅色字                                                                                         //紅色字
  //列印月初前面空格
  for($fs=1;$fs<=$po;$fs++)
  {   echo "<td></td>";  }

  for($a=1;$a<=$monthdays[$m];$a++)
  {
     if(($po==0)or($po==6))
     {
       echo "<td align='right'><font color='red'>".$a."</font></td>";
     }
     else
     {
       echo "<td align='right'>".$a."</td>";
     }
     $po++;
     if($po==7)
     {
       echo "</tr><tr>";
       $po=0;
     }
  }
  //列印月底後面空格
  if($po<>0)
  {
     for($fs=$po;$fs<7;$fs++)
     {   echo "<td></td>";  }
  }
  echo "</tr></table><p>";
}


?>