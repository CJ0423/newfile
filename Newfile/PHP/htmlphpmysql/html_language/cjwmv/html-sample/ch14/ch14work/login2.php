<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績系統-2</title>
</head>
<body>
<h1>成績系統</h1>
<?php
ob_start();
session_start();
    if(@$_SESSION["step"]!="n2")
    {     //系科資料
        $dept=$_POST["dept"];

           //年級資料
        $grade=$_POST["grade"];


           //班級資料
        $class=$_POST["class"];


          //科目數資料
        $counu=$_POST["counu"];

          //接收人數資料
        $nu=$_POST["nu"];


          //分別設定「系科、年、班、科目數、人數」的 session變數 值
       $_SESSION["dept"]=$dept;         //系科資料
       $_SESSION["grade"]=$grade;       //年級資料
       $_SESSION["class"]=$class;       //科目數資料
       $_SESSION["counu"]=$counu;       //科目數資料
       $_SESSION["nu"]=$nu;             //科目數資料
       $_SESSION["step"] ="n2";          //設定步驟資料己接收
    }
    // 如果資料都有那麼就可以開始執行了。
    else
    {
         //分別取出「系科、年、班、科目數、人數」的 session變數 值
      $dept=$_SESSION["dept"];         //系科資料
      $grade=$_SESSION["grade"];       //年級資料
      $class=$_SESSION["class"];       //科目數資料
      $counu=$_SESSION["counu"];       //科目數資料
      $nu=$_SESSION["nu"];             //科目數資料
    }
      //列印報表
      Echo "<center><h1>中職科技大學</h1>";
      Echo "<h2>成績單</h2>";
      Echo "科  系:".$dept."<br>";
      Echo "年  班:".$grade."年".$class."班<br>";
      Echo "科目數:".$counu."<p>";
  
  
  
  
  
   
  //開始進行二次表單資料接收傳送工作
  
    echo "請輸入下列資料<br>";
    echo "<form method='post' action='login3.php'>";
  
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




?>
</body>
</html>