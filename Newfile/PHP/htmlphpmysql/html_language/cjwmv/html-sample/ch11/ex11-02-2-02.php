<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//    報表資料確認
//
//    設定      $scodata[$y][$x] 陣列變數  索引設定[$x]:0=>姓名  1=>國文  2=>英文   3=>數學   4=>化學   5=>總分   6=>平均
//                                                 [$y]:座號
//    表單名稱   scodata.$y.$x            $x  設定:0=>姓名  1=>國文  2=>英文   3=>數學   4=>化學       
//
//        系科變數:$dept   ,  年級變數:$grade  ,  班級變數:$class  ，人數資料:$nu
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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

 
//開始進行二次表單資料接收傳送工作

  echo "請輸入下列資料:　　　　　　　　　　　　人數:".$nu."人<br>";
echo "<form name='scor' method='post' action='scor01-1.php'>";

//隱藏表單資料
  echo "<input type='hidden' name='dept' value='".$dept."'>";     //系名稱資料傳送
  echo "<input type='hidden' name='grade' value='".$grade."'>";   //年名稱資料傳送
  echo "<input type='hidden' name='class' value='".$class."'>";   //班名稱資料傳送
  echo "<input type='hidden' name='nu' value='".$nu."'>";          //人數資料傳送

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

for($y=1;$y<=$nu;$y++)                //外廻圈:定義座號,人數為$nu
{
   echo "<tr><td>".$y."</td>"; 
    for($x=0;$x<=4;$x++)            //內廻圈:定義項目欄位
    {
        echo "<td><input type='text' name='scodata".$y.$x."' size='8'></td>";
    }
    echo "</tr>";
}
    echo "</table><p>";
    echo "<input type='submit' name='send' value='送出'>";
echo "</form>";
?>