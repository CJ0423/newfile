<?php
//列印星期，方法2:計算列印數量,位置對齊
//$po=0;   //設定列印位置，星期日
$po=2;   //設定1日列印位置

echo "<table width='380'>";
echo "<tr align='right'><td><font color='red'>SUN</font></td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td><font color='red'>SAT</font></td></tr><tr>";
                            //紅色字                                                                                         //紅色字
//列印1日前面空格
for($fs=1;$fs<=$po;$fs++)
{
   echo "<td></td>";    
}
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
echo "</tr></table>";
?>