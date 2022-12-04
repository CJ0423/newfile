<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績系統</title>
</head>
<body>
    <?php
    ob_start();
    $account=$_POST["account"];
    // 創造一組名叫做帳號的id
    session_id($account);
    session_start();
    //利用step去決定位置
    if(isset($_SESSION["step"])){
        $step=$_SESSION["step"];
        if($step=="n2"){
            header("Refresh:3; URL=login2.php");
        }
        if($step=="n3"){
            header("Refresh:3; URL=login3.php");
        }
        if($step=="n4"){
            header("Refresh:3; URL=login4.php");
        }

    }
    else{
    ?>
    <!-- 此處回到html畫面 -->
    <h1>成績系統</h1>
    請輸入下列項目<br>
    <form method="post" action="login2.php">
   
     系科:<select name="dept">
            <option value="資訊管理" selected>資訊管理</option>
            <option value="幼兒" >幼兒</option>
            <option value="化妝品" >化妝品</option>
          </select><br>
     <select name="grade">
            <option value="一" selected>一</option>
            <option value="二" >二</option>
            <option value="三" >三</option>
          </select>年:
    <select name="class">
            <option value="甲" selected>甲</option>
            <option value="乙" >乙</option>
            <option value="丙" >丙</option>
          </select>班<br>
    科目數:<input type="text" name="counu"><br>
    人　數:<input type="text" name="nu"><br>
            <input type="submit" name="submit" value="送出">
           <input type="reset" name="reset" value="重填">
</form>

<?php
    }
?>

<!-- 尚未確定的疑問？只要啟動session後，所有表單的傳送，都會送入伺服器內保存，以便後續使用，但如果資料沒有按下送出的將不會被儲存。 -->
</body>
</html>