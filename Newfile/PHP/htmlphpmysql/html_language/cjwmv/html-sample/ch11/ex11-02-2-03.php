<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//    報表資料確認
//
//    設定      $scodata[$y][$x] 陣列變數  索引設定[$x]:0=>姓名  1=>國文  2=>英文   3=>數學   4=>化學   5=>總分   6=>平均
//                                                 [$y]:座號
//    表單名稱   scodata.$y.$x            $x  設定:0=>姓名  1=>國文  2=>英文   3=>數學   4=>化學       
//
//        系科變數:$dept   ,  年級變數:$grade  ,  班級變數:$class  ，人數資料:$nu
//
//    設定各科學分數    $credit[ ]   索引設定:         1=>國文  2=>英文   3=>數學   4=>化學     
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//設定各科學分數
$credit=array(0,4,3,2,2);

//接收表單資料
  //系科資料
    $dept=$_POST["dept"];
  
  //年級資料
    $grade=$_POST["grade"];

  //班級資料
    $class=$_POST["class"];


  //接收人數資料
    $nu=$_POST["nu"];

  //列印報表
    Echo "<center><h1>中職科技大學</h1>";
    Echo "<h2>成績單</h2>";
    Echo "科系:".$dept."<br>";
    Echo "年班:".$grade."年".$class."班<br>";

  echo "　　　　　　　　　　　　　　　　　　　人數:".$nu."人<br>";
//接收傳送資料
for($y=1;$y<=$nu;$y++)                //外廻圈:定義座號,人數為$nu
{
    for($x=0;$x<=4;$x++)
    {
     //   $scodata[$y][$x]=$_POST["scodata".$x];
       $str="scodata".$y.$x;
       $scodata[$y][$x]=$_POST[$str];
    }
}
//計算總分
for($y=1;$y<=$nu;$y++)                //外廻圈:定義座號,人數為$nu
{
    $scodata[$y][5]=0;     //總分欄位
    $totcredit=0;         //總學分
    for($x=1;$x<=4;$x++)
    {
       //$scodata[5]+=($scodata[$x]*$credit[$x]);                    //總分累加(各科分數*該科學分數)
       $scodata[$y][5]=$scodata[$y][5]+$scodata[$y][$x]*$credit[$x];
       $totcredit+=$credit[$x];
    }   

//計算平均
       $scodata[$y][6]=(int)($scodata[$y][5]/$totcredit) ;
}

//列印成績單
echo "<table border='2'>";
echo "<tr><td>座號</td><td>姓名</td><td>國文(4)</td><td>英文(3)</td><td>數學(2)</td><td>化學(2)</td><td>總分</td><td>平均</td></tr>";
for($y=1;$y<=$nu;$y++)                //外廻圈:定義座號,人數為$nu
{
 echo "<tr><td>".$y."</td>";
    for($x=0;$x<=6;$x++)
    {
        echo "<td align='center'>".$scodata[$y][$x]."</td>";
    }
    echo "</tr>";
}
    echo "</table><p>";









?>