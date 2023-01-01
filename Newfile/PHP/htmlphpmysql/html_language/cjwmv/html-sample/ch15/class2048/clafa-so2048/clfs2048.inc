<?php
 function fu2048($a)
 {
    function prin2048($a,$b)
    {
        echo "<td bgcolor='".$a."' width='110' height='110' align='center' valign='middle'><font size='7'>".$b."</font></td>";
    }

    echo "<body bgcolor='yellow'>";
    echo "<center><h2>2048¹CÀ¸</h2>";
    echo "<table border='3'>";
    for($x=1;$x<=4;$x++)
    {
       echo "<tr>";
       for($y=1;$y<=4;$y++)
       {
          if($a[$x][$y]==0)
          {
              prin2048("#FFFFFF","");
          }
          elseif($a[$x][$y]==2)
          {
              prin2048("#0000FF",2);
          }
          elseif($a[$x][$y]==4)
          {
              prin2048("#00FF00",4);
          }
          elseif($a[$x][$y]==8)
          {
              prin2048("#FF0000",8);
          }
          elseif($a[$x][$y]==16)
          {
              prin2048("#00FFFF",16);
          }
          elseif($a[$x][$y]==32)
          {
              prin2048("#FF00FF",32);
          }
          elseif($a[$x][$y]==64)
          {
              prin2048("#FFFF00",64);
          }
          elseif($a[$x][$y]==128)
          {
              prin2048("#0000cc",128);
          }
          elseif($a[$x][$y]==256)
          {
              prin2048("#00cc00",256);
          }
          elseif($a[$x][$y]==512)
          {
              prin2048("#cc0000",512);
          }
          elseif($a[$x][$y]==1024)
          {
              prin2048("#00cccc",1024);
          }
          elseif($a[$x][$y]==2048)
          {
              prin2048("#cc00cc",2048);
          }
          elseif($a[$x][$y]==4096)
          {
              prin2048("#cccc00",4096);
          }    
          elseif($a[$x][$y]==8192)
          {
              prin2048("#00FFcc",8192);
          }
          elseif($a[$x][$y]==16384)
          {
              prin2048("#00ccFF",16384);
          }
          else
          {
              prin2048("#FF00cc",32768);
          } 
       }   
       echo "</tr>";
   }
   echo "</table>";
 }

 function form2048($a)
 {
   echo "<br><br><form method='post' action='clafs2048-2.php'>";
   for($x=1;$x<=4;$x++)
   {
      for($y=1;$y<=4;$y++)
      {
        echo "<input type='hidden' name='a".$x.$y."' value='".$a[$x][$y]."'>";
      }
   }
   echo "¡@¡@<input type='submit' name='tran' value='up'><br>¡@¡@";

   echo "<input type='submit' name='tran' value='left'>¡@¡@¡@¡@¡@";
   echo "<input type='submit' name='tran' value='right'><br>¡@¡@";
   echo "<input type='submit' name='tran' value='down'>¡@¡@";

   echo "</form>";
 }

?>