<?php
//列印星期，方法2:計算列印數量,位置對齊
//$po=0;   //設定列印位置，星期日
//$po=2;   //設定元旦列印位置
//讀取基本資料,並指定給相對應的變數
$y=$_POST["yea"]; 

//判斷閏年或平年並設定每月日數
if((($y%400)==0)or((($y%100)<>0)and(($y%4)==0)))
{
 $m2=29;
}
else
{
  $m2=28;
}

//判斷該年元旦指標位置
$n4=(int)(($y-1)/4);
$n100=(int)(($y-1)/100);
$n400=(int)(($y-1)/400);
$ns=$n4-$n100+$n400;      //計算閏年數
$nl=$y-1-$ns;             //計算平年數

$dall=$ns*2+$nl;          //總移動天數(或 $dall=($y-1)+$ns)
$po=($dall+1)%7;           //元旦指標  

////////// 一月 ////////////
echo "<h2>一月</h2>";  //月份名稱

echo "<table width='280' border='1'>";
echo "<tr align='right'><td><font color='red'>SUN</font></td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td><font color='red'>SAT</font></td></tr><tr>";
                            //紅色字                                                                                         //紅色字
//列印月初前面空格
for($fs=1;$fs<=$po;$fs++)
{   echo "<td></td>";  }

for($a=1;$a<=31;$a++)
{
  if(($po==0)or($po==6))
  {
    echo "<td align='right'><font color='red'>".$a."</font></td>";
  }
  else
  {
    echo "<td align='right'>".$a."</td>";
  }
  $po++;
  if($po==7)
  {
    echo "</tr><tr>";
    $po=0;
  }
}
//列印月底後面空格
if($po<>0)
{
  for($fs=$po;$fs<7;$fs++)
  {   echo "<td></td>";  }
}
echo "</tr></table><p>";

////////// 二月 ////////////
echo "<h2>二月</h2>";  //月份名稱

echo "<table width='280' border='1'>";
echo "<tr align='right'><td><font color='red'>SUN</font></td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td><font color='red'>SAT</font></td></tr><tr>";
                            //紅色字                                                                                         //紅色字
//列印月初前面空格
for($fs=1;$fs<=$po;$fs++)
{   echo "<td></td>";  }

for($a=1;$a<=$m2;$a++)
{
  if(($po==0)or($po==6))
  {
    echo "<td align='right'><font color='red'>".$a."</font></td>";
  }
  else
  {
    echo "<td align='right'>".$a."</td>";
  }
  $po++;
  if($po==7)
  {
    echo "</tr><tr>";
    $po=0;
  }
}
//列印月底後面空格
if($po<>0)
{
  for($fs=$po;$fs<7;$fs++)
  {   echo "<td></td>";  }
}
echo "</tr></table><p>";

////////// 三月 ////////////
echo "<h2>三月</h2>";  //月份名稱

echo "<table width='280' border='1'>";
echo "<tr align='right'><td><font color='red'>SUN</font></td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td><font color='red'>SAT</font></td></tr><tr>";
                            //紅色字                                                                                         //紅色字
//列印月初前面空格
for($fs=1;$fs<=$po;$fs++)
{   echo "<td></td>";  }

for($a=1;$a<=31;$a++)
{
  if(($po==0)or($po==6))
  {
    echo "<td align='right'><font color='red'>".$a."</font></td>";
  }
  else
  {
    echo "<td align='right'>".$a."</td>";
  }
  $po++;
  if($po==7)
  {
    echo "</tr><tr>";
    $po=0;
  }
}
//列印月底後面空格
if($po<>0)
{
  for($fs=$po;$fs<7;$fs++)
  {   echo "<td></td>";  }
}
echo "</tr></table><p>";

?>