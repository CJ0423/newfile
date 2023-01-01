<?php
  $teop=file("dat1.txt");
  $a=count($teop); 
 echo "<table border='2'><tr><td>資料</td></tr>";
  for($i=1;$i<=$a;$i++)
   {
    
      echo "<tr><td>".$teop[$i-1]."</td></tr>";
   }
  echo "</table>";
  echo "<table border='2'><tr><td>姓名</td><td>身分證號</td><td>縣市</td><td>住址</td></tr>";
  for($i=1;$i<=$a;$i++)
   {
    // 字串轉為陣列 explode 以;分割字串要分割的則是$teop這個資料。
    $dat[$i-1]=explode(";",$teop[$i-1]);
  echo "<tr><td>".$dat[$i-1][0]."</td><td>".$dat[$i-1][1]."</td><td>".$dat[$i-1][2]."</td><td>".$dat[$i-1][3]."</td></tr>";
   }
  echo "</table>";
?>
