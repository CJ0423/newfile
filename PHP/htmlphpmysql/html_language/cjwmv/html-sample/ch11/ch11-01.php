<?php
  Echo "<table border='1'>";
  Echo "<tr><td>\$x</td><td>\$a=2*\$x-1 </td><td>\$b=11-\$x </td><td>\$c=6-\$x </td><td>\$d= abs(6-\$x)</td></tr>";
For($x=1;$x<=10;$x++)
{
  $a=2*$x-1;
  $b=11-$x;
  $c=6-$x;
  $d=abs(6-$x);
  Echo "<tr align='center'><td width='30'>".$x."</td><td>" .$a."</td><td>" .$b."</td><td>" .$c."</td><td>" .$d."</td></tr>";
}
  Echo "</table>";
?>
