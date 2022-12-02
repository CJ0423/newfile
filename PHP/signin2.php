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
    if ($_POST["account"] == $_POST["account1"]) {
        if ($_POST["password"] == $_POST["ss1"]) {
            echo "登入成功";
        } else {
            echo '登入失敗<br><a href="http://localhost/php/signin.php">創建帳號</a>';
        }
    } else {
        echo '登入失敗<br><a href="http://localhost/php/signin.php">創建帳號</a>';
    }




    ?>
</body>

</html>