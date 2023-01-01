<?php
  $data=array("陳大同",86,75,90,63,0,0);  //後5,6兩欄為總分及平均的預設值
  Echo "<table border='1'>";
  Echo "<tr align='center'><td>座號</td><td>姓名</td><td>國文</td><td>英文 </td><td>數學</td><td>化學</td><td>總分</td><td>平均</td></tr>";
  Echo  "<tr align='center'><td width='80'>1</td><td width='80' >" .$data[0] . "</td>";
  For($x=1;$x<=4;$x++)
{
    Echo "<td width='80'> " .$data[$x]."</td> ";
    $data[5]+=$data[$x];
}
 $data[6]=(int)( $data[5]/4+0.5);    //平均為 四拾五入 取整數
Echo "<td width='80' >". $data[5]."</td><td width='80' >". $data[6]."</td></tr>";
  Echo "</table>";
?>
