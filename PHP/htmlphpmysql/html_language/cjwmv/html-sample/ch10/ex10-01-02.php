<?php
//列印星期，方法2:計算列印數量,位置對齊
$nu=0;
echo "<table width='260' ><tr>";
for($a=1;$a<=31;$a++)
{
  echo "<td align='right'>".$a."</td>";
  $nu++;
  if($nu==7)
  {
    echo "</tr><tr>";
    $nu=0;
  }
}
echo "</tr></table>";
?>