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

//////////   讀取 session 資料  //////////////////////////////
	ob_start();  //開啟輸出暫存器

   //指定session_ID
        $idname=$_POST["idname"];        //避免狀況五現象
        session_id($idname);
 
   //啟動session
        session_start();

   //分別設定「系科、年、班、科目數、人數」的 session變數 值
      $dept=$_SESSION["dept"];         //系科資料
      $grade=$_SESSION["grade"];       //年級資料
      $class=$_SESSION["class"];       //班級資料
      $counu=$_SESSION["counu"];       //科目數資料
      $nu=$_SESSION["nu"];             //人數資料

//////////////////////////////////////////////////////////////

  //依科目數設定接收科目名稱及學分資料廻圈
    for($a=1;$a<=$counu;$a++)
    {
      $counb="couna".$a;             //設定表單的科目名稱
      $counna[$a]=$_POST[$counb];
      $counb="cousc".$a;             //設定表單的學分名稱
      $counsc[$a]=$_POST[$counb];
    }

////////////  設定科目名稱及學分之 陣列 session 資料 ////////////////

      $_SESSION["counna"]=$counna;     //科目名稱
      $_SESSION["counsc"]=$counsc;     //學分名稱

//////////////////////////////////////////////////////////////////////

  //列印報表
    Echo "<center><h1>中職科技大學</h1>";
    Echo "<h2>成績單</h2>";
    Echo "科系:".$dept."<br>";
    Echo "年班:".$grade."年".$class."班<br>";

    echo "人數:".$nu."人<br>";

//開始進行二次表單資料接收傳送工作

  echo "請輸入下列資料<br>";
  echo "<form method='post' action='session-gradeD.php'>";
  echo "<input type='hidden' name='idname' value='".$idname."'>";     //session_id名稱

//列印表格化表單
  Echo "<table border='1'>";
  Echo "<tr><td>座號</td><td>姓名</td>";

//列印科目名稱欄位
    for($a=1;$a<=$counu;$a++)
    {
      echo "<td>".$counna[$a]."(".$counsc[$a].")</td>";
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
