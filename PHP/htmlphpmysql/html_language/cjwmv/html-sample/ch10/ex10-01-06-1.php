<?php
//設定月份名稱陣列
$monthname=array("","一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月");
//設定月份日數陣列
$monthdays=array(0,31,29,31,30,31,30,31,31,30,31,30,31);

$po=2;   //設定元旦列印位置

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