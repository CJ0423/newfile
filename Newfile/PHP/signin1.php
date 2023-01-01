<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
if (isset($_POST["accountArray0"])) {
        $accountArray[0] = $_POST["accountArray0"];
        $passwordArray[0] =$_POST["ss"];

        echo "中職商城<br><form method='post'action='signin2.php'>帳號<input name='account' type='text'><br>
        密碼<input name='password' type='text'>
        <input name='account1'type='hidden'  value=".$accountArray[0].">
        <input name='ss1'type='hidden'  value=".$passwordArray[0].">
        <input type='submit'>
        <input type='reset'>";


        echo"</form>";

    }







else{
    echo "中職商城<br><form method='post'action='signin2.php'>帳號<input name='account' type='text'><br>
    密碼<input name='password' type='text'>
    <input name='account1'type='hidden'>
    <input name='ss1'type='hidden' >
    <input type='submit'>
    <input type='reset'>";


    echo"</form>";
    
    
   } ?>
</body>
</html>