<?php
   //  設定陣列資料
   $sco=array(0=>array(86,73,90,55,81,70,66,93,68,70),
            1=>array(1,1,1,1,1,1,1,1,1,1));          //第2維 陣列索引 0 ~ 9
  // 進行分數比較 及 名次比較
   For($x=0;$x<=9;$x++)           //外圈為比較者
   {
       For($y=0;$y<=9;$y++)      //內圈為被比較者
       {
           If($sco[0][$x]<$sco[0][$y])  //如果比較者分數較小，則
           {
              $sco[1][$x]++;         //名次加1
           }
       }
    }
//列印報表資料
  Echo "名次排定如下：<br>";
  Echo "<table border='1' width='450'>";
   For($x=0;$x<=1;$x++)           
   {
      If($x==0)
      { Echo "<tr align='center'><td>分數</td>"; }
      Else
      { Echo "<tr align='center'><td>名次</td>"; }

       For($y=0;$y<=9;$y++)      
       {
        Echo "<td>". $sco [$x][$y]."</td>";
       }
      Echo "</tr>";
    }
  Echo "</table>";
?>
