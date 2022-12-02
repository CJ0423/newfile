<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $check=0;
if(isset($_POST["account"])){
    $account=$_POST["account"];
    $password=$_POST["password"];
    
    if(!preg_match("/^[[:alnum:]]{1,10}$/",$account)){
        //需要特別注意的是alnum（任意英文數字）外面還要有一個中括號；
        echo"帳號錯誤";
    }
    else{
        $check++;
    }
    if(!preg_match("/^[a-z]{1}[[:alnum:]]{1,10}$/",$password)){
        //需要特別注意的是alnum（任意英文數字）外面還要有一個中括號；
        echo"密碼錯誤";
        
    }
    else{
        $check++;;
    }
    if($check==2){
       
        echo $account."會員您好<br>歡迎加入XX俱樂部<br>請詳細填寫您的基本資料<br><form action='check.php' method='post'>";
        echo"<input  type='hidden'  name='account' value='$account'>";
        echo"<input type='hidden' name='password' value='$password'>";
        echo'姓名:<input name="name" type="text"><br>';
        echo'生日:<select><option>1998</option>年</select><select><option>4</option></select><select><option>23</option></select><br>';
        echo'性別:<select><option>男生</option><option>女生</option><select><br>';
        echo'身分證號:<input name="id" type="text"><br>';
        echo'教育程度:<select><option>國小</option><option>國中</option>
        <option>高中</option><option>大學</option><select><br>';
        echo'手機:<input name="number" type="text"><br>';
        echo'EMAIL:<input name="email" type="text"><br>';
        echo'住址:<input name="address" type="text"><br>';
        echo'<input type="submit"><input type="reset"></form>'
    ;}

;}




else{
   echo' <h3>歡迎加入中職商城</h3>';
   echo' <h3>請填寫申請帳號密碼</h3><form method="post" action="signin.php">';
   echo' <h3>帳號<input name="account" type="text">1~10位英數字</h3>';
   echo' <h3>密碼<input name="password" type="text">1~10位英數字，第一字必須是英文</h3>';
   echo'<input type="submit" value="創建">';
   echo'<input type="reset">';
   echo'</form>';
}
   
   
   
   
   ?>
</body>
</html>