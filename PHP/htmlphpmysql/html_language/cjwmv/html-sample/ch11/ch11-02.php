<?php
  $sco=array(0, 86,75,93,80,55,68,72,70,88,61);
  $mda=array(0, 31,29,31,30,31,30,31,31,30,31);
Echo "<table border='1'>";
  Echo "<tr><td>\$x</td><td>\$sco[\$x] </td><td>\$mda[\$x] </td></tr>";
For($x=1;$x<=10;$x++)
{
    Echo "<tr align='center'><td width='30'>".$x."</td> <td>" .$sco[$x]."</td> <td>" .$mda[$x]."</td></tr>";
}
  Echo "</table>";
?>
