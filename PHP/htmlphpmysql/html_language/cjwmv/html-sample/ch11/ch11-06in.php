<html>
  <head>
     <title>
       成績系統
     </title>
  </head>
  <body>
    <h1>成績系統</h1>
<?php
/*
 表單資料設計
   表單名稱設為二維陣列變數型態:scor.$x.$y
    [$x]代表座號，
    [$y]表示項目，列示如后:[1]->姓名、[2]->平時、[3]->期中考、[4]->期末考
*/
  echo "請輸入下列資料<br>";
  echo "<form method='post' action=' ch11-06out.php'>";

//列印表格化表單
  Echo "<table border='1'>";
  Echo "<tr><td>座號</td><td>姓名</td><td>平時30%</td><td>期中30%</td><td>期末40%</td></tr>";

  for($x=1;$x<=5;$x++)
  {
    echo "<tr><td>".$x."</td>";
     for($y=1;$y<=4;$y++)
     {
       echo "<td><input type='text' name='scor".$x.$y."' size='4'></td>";
     }
    echo "</tr>";
  }
?>
</table>
<input type="submit" name="submit" value="送出">
<input type="reset" name="reset" value="重填">
</form>
  </body>
</html>
