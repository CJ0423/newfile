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

    科目數變數:$counu ,  人數變數:$nu

    科目名稱變數:couna.$counu.        科目學分變數: cousc.$counu
                (陣列變數)                          (陣列變數)
 
 */

//接收表單資料
  //系科資料
    $dept=$_POST["dept"];
    $dept1=substr($dept, -1);   //取得系科代號
    $dept=substr($dept,0,-1);   //去除系科代號

  //年級資料
    $grade=$_POST["grade"];
    $grade1=substr($grade, -1);   //取得年級代號
    $grade=substr($grade,0,-1);   //去除年級代號

  //班級資料
    $class=$_POST["class"];
    $class1=substr($class, -1);   //取得班級代號
    $class=substr($class,0,-1);   //去除班級代號

  //科目數資料
    $counu=$_POST["counu"];

  //接收人數資料
    $nu=$_POST["nu"];

  //列印報表
    Echo "<center><h1>中職科技大學</h1>";
    Echo "<h2>成績單</h2>";
    Echo "科  系:".$dept."<br>";
    Echo "年  班:".$grade."年".$class."班<br>";
    Echo "科目數:".$counu."<p>";

//////////   設定 session 資料  //////////////////////////////
	ob_start();  //開啟輸出暫存器

   //指定session_ID
        $idname=$dept1.$grade1.$class1;

        session_id($idname);
   //啟動session
        session_start();
   //分別設定「系科、年、班、科目數、人數」的 session變數 值
      $_SESSION["dept"]=$dept;         //系科資料
      $_SESSION["grade"]=$grade;       //年級資料
      $_SESSION["class"]=$class;       //科目數資料
      $_SESSION["counu"]=$counu;       //科目數資料
      $_SESSION["nu"]=$nu;             //科目數資料

//////////////////////////////////////////////////////////////
 
//開始進行二次表單資料接收傳送工作

  echo "請輸入下列資料<br>";
  echo "<form method='post' action='session-gradeC.php'>";
  echo "<input type='hidden' name='idname' value='".$idname."'>";     //session_id名稱

//列印表格化輸入表單
  echo "請輸入各科目名稱及學分:<br>";
  Echo "<table border='1'>";
  echo "<tr><td>科目編號</td><td>科目名稱</td><td>學分</td></tr>";
  for($a=1;$a<=$counu;$a++)
  {
    Echo "<tr><td>".$a."</td>";        //編號
    echo "<td><input type='text' name='couna".$a."' size='4'></td>";          //科目名稱表單
    echo "<td><input type='text' name='cousc".$a."' size='4'></td></tr>";     //科目學分表單
  }
?>
</table>
<input type="submit" name="submit" value="送出">
<input type="reset" name="reset" value="重填">
</form>

  </body>
</html>
