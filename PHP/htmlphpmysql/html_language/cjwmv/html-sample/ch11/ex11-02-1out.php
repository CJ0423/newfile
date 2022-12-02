﻿<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//    設定      $scodata[$x] 陣列變數  索引設定:0=>姓名  1=>國文  2=>英文   3=>數學   4=>化學   5=>總分   6=>平均
//
//    表單名稱   scodata.$x            $x  設定:0=>姓名  1=>國文  2=>英文   3=>數學   4=>化學  
//
//    設定各科學分數    $credit[ ]   索引設定:         1=>國文  2=>英文   3=>數學   4=>化學     
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//設定各科學分數
$credit=array(0,4,3,2,2);

//接收傳送資料 
  for($y=1;$y<=4;$y++)
  {
    
    for($x=0;$x<=4;$x++)
    {
     //   $scodata[$y][$x]=$_POST["scodata".$y.$x];
       $str="scodata".$y.$x;
       $scodata[$y][$x]=$_POST[$str];
    }
  }

//計算總學分
    $totcredit=0;      //總學分
    for($x=1;$x<=4;$x++)
    {
       $totcredit+=$credit[$x];
    }

//計算總分及平均
  for($y=1;$y<=4;$y++)
  {
    $scodata[$y][5]=0;     //總分欄位
    for($x=1;$x<=4;$x++)
    {
       //$scodata[$y][5]+=($scodata[$y][$x]*$credit[$x]);                 //總分累加(各科分數*該科學分數)
       $scodata[$y][5]=$scodata[$y][5]+$scodata[$y][$x]*$credit[$x];
    } 
    //計算平均
       $scodata[$y][6]=(int)($scodata[$y][5]/$totcredit) ;
  }

//列印成績單
echo "<table border='2'>";
echo "<tr align='center'><td>座號</td><td>姓名</td><td>國文(4)</td><td>英文(3)</td><td>數學(2)</td><td>化學(2)</td><td>總分</td><td>平均</td></tr>";
  for($y=1;$y<=4;$y++)
  {
    echo "<tr><td>".$y."</td>";
    for($x=0;$x<=6;$x++)
    {
        echo "<td >".$scodata[$y][$x]."</td>";
    }
    echo "</tr>";
  }
    echo "</table><p>";

?>