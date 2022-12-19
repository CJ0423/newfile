<html>
   <head>
      <title>玩具商場</title>
      <style>
         .a01 {width:100%;height:100%}
         .a02 {float:left;width:150pt;height:270pt;margin:5pt;}
      </style>
   </head>
   <body>
      <form action="">
      <table><tr width="100%" height="90%" ><td>
      <div class="a01">
           <h1>玩具商城</h1>
<?php
       $data=array(0=>array("toy01","紳士鳥","bank-1.wmf","200","陶瓷","toy01"),
                   1=>array("toy02","呆呆鱷","bank-11.wmf","150","陶瓷","toy02"),
                   2=>array("toy03","星光魚","bank-13.wmf","300","陶瓷","toy03"),
                   3=>array("toy04","淘氣鳥","bank-37.wmf","120","橡膠","toy04"),
                   4=>array("toy05","花花豬","bank-56.wmf","180","陶瓷","toy05"),
                   5=>array("toy06","跳跳蛙","bank-123.wmf","110","橡膠","toy06"),
                   6=>array("toy07","綠毛怪","bank-150.wmf","80","橡膠","toy07"),
                   7=>array("toy08","乖巧免","bank-152.wmf","180","陶瓷","toy08"),
                   8=>array("toy09","聖誕老人","bank-164.wmf","250","陶瓷","toy09"),
                   9=>array("toy10","小飛象","bank-176.wmf","130","橡膠","toy10"));
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
           <input type="submit" name="toy" value="送出">
       </td></tr>
       </table>
       </form>