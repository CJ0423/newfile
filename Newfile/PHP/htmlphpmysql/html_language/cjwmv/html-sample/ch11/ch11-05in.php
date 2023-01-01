<html>
   <head>
     <title>成績輸入程式</title>
   </head>
   <body>
      <h2>請輸入下列資料</h2>
      <form method="post" action="ch11-05out.php">
        <table border="1">
<?php
/////////////////////////////////////////////////////////////////////////////////////////
//   <tr><td>座號</td><td>姓名</td><td>國文</td><td>英文</td><td>數
//   學</td><td>化學</td></tr><tr>
////////////////////////////////////////////////////////////////////////////////////////
     $tit=array("座號","姓名", "國文", "英文", "數學", "化學");
     Echo "<tr>";
     For($x=0;$x<=5;$x++)
     {
        Echo "<td>".$tit[$x]."</td>";
     }
     Echo "</tr><tr><td>1</td>";
/////////////////////////////////////////////////////////////////////////////////////////
//          <td><input type="text" name="data0" size="6"></td>
//          <td><input type="text" name="data1" size="6"></td>
//          <td><input type="text" name="data2" size="6"></td>
//          <td><input type="text" name="data3" size="6"></td>
/////////////////////////////////////////////////////////////////////////////////////////
     For($x=0;$x<=4;$x++)
     {
        Echo "<td><input type='text' name='data".$x."' size='6'></td>";
     }
?>
</tr></table>
        <input type="submit" name="send" value="送出">　
        <input type="reset" name="reset" value="重填">　
      </form>
   </body>
</html> 
