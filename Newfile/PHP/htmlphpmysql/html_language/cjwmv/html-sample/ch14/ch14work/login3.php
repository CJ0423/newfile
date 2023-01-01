<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績系統-3</title>
</head>
<body>
    <h1>成績系統</h1>
    <?php
    ob_start();
    session_start();
    $dept=$_SESSION["dept"];         //系科資料
    $grade=$_SESSION["grade"];       //年級資料
    $class=$_SESSION["class"];       //班級資料
    $counu=$_SESSION["counu"];       //科目數資料
    $nu=$_SESSION["nu"];             //人數資料
    if( $_SESSION["step"] !="n3")
      {
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
          $_SESSION["step"] ="n3";          //設定步驟資料己接收

       }
       else
       {
////////////  取出科目名稱及學分之 陣列 session 資料 ////////////////

          $counna=$_SESSION["counna"];     //科目名稱
          $counsc=$_SESSION["counsc"];     //學分名稱
       }
       Echo "<center><h1>中職科技大學</h1>";
    Echo "<h2>成績單</h2>";
    Echo "科系:".$dept."<br>";
    Echo "年班:".$grade."年".$class."班<br>";

    echo "人數:".$nu."人<br>";

//開始進行二次表單資料接收傳送工作

  echo "請輸入下列資料<br>";
  echo "<form method='post' action='login4.php'>";


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
    
    
    
    
    ?>
</body>
</html>