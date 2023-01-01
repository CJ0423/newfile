<?php
  $teop=file("dat1.txt");
  $a=count($teop); 
  for($i=1;$i<=$a;$i++)
   {
    echo $teop[$i-1]."<br>";
   }

?>
