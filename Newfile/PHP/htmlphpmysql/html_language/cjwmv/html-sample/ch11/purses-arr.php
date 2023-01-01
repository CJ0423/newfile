<html>
   <head>
      <title>玩具商場</title>
      <style>
         .a01 {width:100%;height:100%}
         .a02 {float:left;width:150pt;height:270pt;margin:5pt;background-color:yellow;}
      </style>
   </head>
   <body>
      <form action="">
      <table><tr width="100%" height="90%" ><td>
      <div class="a01">
           <h1>皮包專櫃</h1>
<?php
       $data=array(0=>array("purses01","棋盤勇士","01.jpg","3730","polo","purses01"),
                   1=>array("purses02","經典綠格","02.jpg","660","polo","purses02"),
                   2=>array("purses03","活力滿點","03.jpg","4180","polo","purses03"),
                   3=>array("purses04","拉鍊扁包","04.jpg","3600","polo","purses04"),
                   4=>array("purses05","梯形拉錬","05.jpg","3600","polo","purses05"),
                   5=>array("purses06","迷人水餃包","06.jpg","4030","polo","purses06"),
                   6=>array("purses07","酷炫帥包","07.jpg","3280","polo","purses07"),
                   7=>array("purses08","文藝精神","08.jpg","3430","polo","purses08"),
                   8=>array("purses09","勇士型男","09.jpg","2760","polo","purses09"),
                   9=>array("purses10","束繩拉鍊小托特","10.jpg","3960","polo","purses10"));
      for($x=0;$x<=9;$x++)
      {
        echo '<table border="1" class="a02">';
        echo '<tr align="center"><td>'.$data[$x][0].'</td></tr>';
        echo '<tr align="center"><td>'.$data[$x][1].'</td></tr>';
        echo '<tr><td><img src="'.$data[$x][2].'" width="150" height="150"></td></tr>';
        echo '<tr align="center"><td>單價:'.$data[$x][3].'</td></tr>';
        echo '<tr align="center"><td>'.$data[$x][4].'</td></tr>';
        echo '<tr align="center"><td>購買<input type="text" name="'.$data[$x][5].'" value="0" size="4">個</td></tr>';
        echo '</table>';
      }
?>

       </div>
       </td></tr>
       <tr><td align="center">
           <input type="submit" name="purses" value="送出">
       </td></tr>
       </table>
       </form>