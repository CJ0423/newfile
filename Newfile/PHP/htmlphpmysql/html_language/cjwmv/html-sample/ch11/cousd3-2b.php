<html>
<html>
  <head>
     <title>
       成績系統
     </title>
  </head>
  <body>
    <h1>成績系統</h1>
<?php
/*
  報表資料確認
    系科變數:$dept   ,  年級變數:$grade  ,  班級變數:$class

    科目數變數:$counu    ,  人數變數:$nu 

    科目名稱變數:$couna[$couna]    ,科目學分變數:$cousc[$couna]

    資料形態採 2 維陣列設定，名稱設定為: scor.$x.$y.
       $x 代表座號，
       $y 表示項目，列示如后:1->姓名、2->科目１、3->科目２、4->科目３...以此類推
 */

//接收表單資料
  //系科資料
    $dept=$_POST["dept"];
  
  //年級資料
    $grade=$_POST["grade"];

  //班級資料
    $class=$_POST["class"];

  //科目數資料
    $counu=$_POST["counu"];

  //接收人數資料
    $nu=$_POST["nu"];

  //依科目數設定接收科目名稱及學分資料廻圈
    for($a=1;$a<=$counu;$a++)
    {
      $counb="couna".$a;             //設定表單的科目名稱
      $couna[$a]=$_POST[$counb];
      $counb="cousc".$a;             //設定表單的學分名稱
      $cousc[$a]=$_POST[$counb];
    }


  //列印報表
    Echo "<center><h1>中職科技大學</h1>";
    Echo "<h2>成績單</h2>";
    Echo "科系:".$dept."<br>";
    Echo "年班:".$grade."年".$class."班<br>";

    echo "人數:".$nu."人<br>";

//開始進行二次表單資料接收傳送工作

  echo "請輸入下列資料<br>";
  echo "<form method='post' action='cousd3-3.php'>";
  echo "<input type='hidden' name='dept' value='".$dept."'>";     //系名稱資料傳送
  echo "<input type='hidden' name='grade' value='".$grade."'>";   //年名稱資料傳送
  echo "<input type='hidden' name='class' value='".$class."'>";   //班名稱資料傳送
  echo "<input type='hidden' name='counu' value='".$counu."'>";   //課目數資料傳送
  echo "<input type='hidden' name='nu' value='".$nu."'>";          //人數資料傳送

  //依科目數設定 傳送 科目名稱 及 學分 資料 廻圈
    for($a=1;$a<=$counu;$a++)
    {
      echo "<input type='hidden' name='couna".$a."' value='".$couna[$a]."' size='4'>";
      echo "<input type='hidden' name='cousc".$a."' value='".$cousc[$a]."' size='4'>";
    }

//列印表格化表單
  Echo "<table border='1'>";
  Echo "<tr><td>座號</td><td>姓名</td>";

//列印科目名稱欄位
    for($a=1;$a<=$counu;$a++)
    {
      echo "<td>".$couna[$a]."(".$cousc[$a].")</td>";
    }
    echo "</tr>";

//列印分數資料接收表單

  for($x=1;$x<=$nu;$x++)
  {
    echo "<tr><td>".$x."</td>";
     for($a=1;$a<=($counu+1);$a++)   //1為姓名 科目位置加1
     {
       echo "<td><input type='text' name='scor".$x.$a."' size='4'></td>";
     }
    echo "</tr>";
  }
?>
</table>
<input type="submit" name="submit" value="送出">
<input type="reset" name="reset" value="重填">
</form>

  </body>
</html>
