﻿<?php
/*
  報表資料確認
    班級資料設為二維陣列變數:$scor[$x][$y]
    [$x]代表座號，
    [$y]表示項目，列示如后:[1]->姓名、[2]->平時、[3]->期中考、[4]->期末考、[5]->學期成績
資料獲得方式確認
   透過表單接收的資料：
      班級各項資料設為二維陣列變數:$scor[$x][$y]，$y為1~4
   運算獲得的資料：
    總分:$scor[$x][5] (int)(($scor[$x][2]*0.3+$scor[$x][3]*0.3+$scor[$x][4]*0.4)+0.5)
*/
////////////////  接收表單資料  及  計算 學期成績  ///////////////////////////
r($x=1;$x<=5;$x++)        //$x代表座號
{
  　for($y=1;$y<=4;$y++)     //$y代表 姓名、平時、期中、期末
 {
      $midata="scor".$x.$y;     //產生對應表單名稱 [scor11]~[scor54]
      $scor[$x][$y]=$_POST[$midata];    //接收對應表單名稱
  }
　　　//計算學期分數
  $scor[$x][5]=(int)($scor[$x][2]*0.3+$scor[$x][3]*0.3+$scor[$x][4]*0.4+0.5); 
}
/////////////////  列印報表
Echo "<center><h1>中職科技大學</h1>";
Echo "<h2>成績單</h2>";
Echo "<table border='1'>";
Echo "<tr><td>座號</td><td>姓名</td> <td>平時30%</td><td>期中30%</td><td>期末40%</td><td>總分</td></tr>";
//1~5號同學
for($x=1;$x<=5;$x++)
{
  echo "<tr><td>".$x."</td>";
    for($y=1;$y<=5;$y++)
    {
       if(($y==5)  and ($scor[$x][$y]<60))
       {
           echo "<td><font color='red'>".$scor[$x][$y]."</font></td>";
       }
       else
       {
           echo "<td>".$scor[$x][$y]."</td>";
       }
    }
  echo "</tr>";
}
Echo "</table>";
?>
