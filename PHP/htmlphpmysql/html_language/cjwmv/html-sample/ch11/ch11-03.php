<?php
  $sco=array(0, 86,75,93,80,55,68,72,70,88,61);
 Echo "<table border='1'>";
  Echo "<tr><td>座號</td><td>國文 </td></tr>";
  $sum=0;    //預設總分為0
  $avg=0;     //預設平均為0
For($x=1;$x<=10;$x++)
{
    Echo "<tr align='center'><td width='30'>".$x."</td> <td>" .$sco[$x]."</td> <td>" .$mda[$x]."</td></tr>";
    $sum+=$sco[$x];
}
 $avg=$sum/10;
Echo “<tr><td>總分</td><td>”.$sum.”</td></tr>”;
Echo “<tr><td>平均</td><td>”.$avg.”</td></tr>”;
  Echo "</table>";
?>
