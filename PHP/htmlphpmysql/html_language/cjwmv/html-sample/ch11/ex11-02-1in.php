<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//    設定      $scodata[$y][$x] 陣列變數  索引設定[$x]:0=>姓名  1=>國文  2=>英文   3=>數學   4=>化學   5=>總分   6=>平均
//                                                 [$y]:座號
//    表單名稱   scodata.$y.$x            $x  設定:0=>姓名  1=>國文  2=>英文   3=>數學   4=>化學       
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "請輸入下列成績資料:<p>";

echo "<form name='scor' method='post' action='ex11-02-1out.php'>";
echo "<table border='2'>";
echo "<tr><td>座號</td><td>姓名</td><td>國文(4)</td><td>英文(3)</td><td>數學(2)</td><td>化學(2)</td></tr>";
/*
    echo "<tr>";
    echo "<td><input type='text' name='scodata0' size='8'></td>";
    echo "<td><input type='text' name='scodata1' size='8'></td>";
    echo "<td><input type='text' name='scodata2' size='8'></td>";
    echo "<td><input type='text' name='scodata3' size='8'></td>";
    echo "<td><input type='text' name='scodata4' size='8'></td>";
    echo "</tr>";
*/
 for($y=1;$y<=5;$y++)
 {  
    echo "<tr><td>".$y."</td>";
    for($x=0;$x<=4;$x++)
    {
        echo "<td><input type='text' name='scodata".$y.$x."' size='8'></td>";
    }
    echo "</tr>";
 }
    echo "</table><p>";
    echo "<input type='submit' name='send' value='送出'>";
echo "</form>";
?>