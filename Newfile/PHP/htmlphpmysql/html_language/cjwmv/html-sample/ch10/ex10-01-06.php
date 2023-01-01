<?php
//列印星期，方法2:計算列印數量,位置對齊
//$po=0;   //設定列印位置，星期日
$po=2;   //設定元旦列印位置

////////// 一月 ////////////
echo "<h2>一月</h2>";  //月份名稱

echo "<table width='280' border='1'>";
echo "<tr align='right'><td><font color='red'>SUN</font></td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td><font color='red'>SAT</font></td></tr><tr>";
                            //紅色字                                                                                         //紅色字
//列印月初前面空格
for($fs=1;$fs<=$po;$fs++)
{   echo "<td></td>";  }

for($a=1;$a<=31;$a++)
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

////////// 二月 ////////////
echo "<h2>二月</h2>";  //月份名稱

echo "<table width='280' border='1'>";
echo "<tr align='right'><td><font color='red'>SUN</font></td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td><font color='red'>SAT</font></td></tr><tr>";
                            //紅色字                                                                                         //紅色字
//列印月初前面空格
for($fs=1;$fs<=$po;$fs++)
{   echo "<td></td>";  }

for($a=1;$a<=29;$a++)
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

////////// 三月 ////////////
echo "<h2>三月</h2>";  //月份名稱

echo "<table width='280' border='1'>";
echo "<tr align='right'><td><font color='red'>SUN</font></td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td><font color='red'>SAT</font></td></tr><tr>";
                            //紅色字                                                                                         //紅色字
//列印月初前面空格
for($fs=1;$fs<=$po;$fs++)
{   echo "<td></td>";  }

for($a=1;$a<=31;$a++)
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

?>