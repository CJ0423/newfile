﻿<html>
   <head>
      <title>胖丁商場</title>
      <style>
         .a01 {width:100%;height:100%}
         .a02 {float:left;width:150pt;height:270pt;margin:5pt;background-color:yellow;}
      </style>
   </head>
   <body>
      <form action="">
      <table><tr width="100%" height="90%" ><td>
      <div class="a01">
           <h1>胖丁商店</h1>
<?php
       $data=array(0=>array("purses01","原始胖丁","../images/01.jpg","3730","polo","purses01"),
                   1=>array("purses02","生氣胖丁","../images/02.jpg","660","polo","purses02"),
                   2=>array("purses03","開心胖丁","../images/03.jpg","4180","polo","purses03"),
                   3=>array("purses04","胖~可丁","../images/04.jpg","3600","polo","purses04"),
                   4=>array("purses05","組合胖丁","../images/05.jpg","3600","polo","purses05"),
                   5=>array("purses06","迷人胖丁","../images/06.jpg","4030","polo","purses06"),
                   6=>array("purses07","充滿決心的胖丁","../images/07.jpg","3280","polo","purses07"),
                   7=>array("purses08","很生氣的胖丁","../images/08.jpg","3430","polo","purses08"),
                   8=>array("purses09","喜樂胖丁","../images/09.jpg","2760","polo","purses09"),
                   9=>array("purses10","傲驕胖丁","../images/10.jpg","3960","polo","purses10"));
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