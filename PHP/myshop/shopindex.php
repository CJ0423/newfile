<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>卡比商城主頁</title>
</head>

<body>
    <table border="5" width="100%" height="1000px">
        <tr height="100">
            <td colspan="3" align="center">
                <font size="7">卡比購物商城<font>
                        <?php
                        $idname = $_POST["idname"]; //取得login登陸時的帳號
                        ob_start();
                        session_id($idname);
                        session_start(); ?>
            </td>
        </tr>
        <tr >
            <!-- 對齊表格上方 -->
            <td valign="top" width="180"><br><br>
                <font size="6">
<?php
echo'<a href="kirby.php? idname='.$idname.'"target="main">卡比商城</a><br>';
echo'<a href="fat1.php? idname='.$idname.'"target="main">胖丁商城<a><br>';
?>

</font>
</td>
<td>
    <!-- iframe用途? 將整個網頁塞入 -->
    <iframe name="main" src="kirby.php" width="100%" height="100%"></iframe></td>
    <td width="300">
                 <iframe name="shoppingcars" src="shoppingcars.php" width="100%" height="100%"></iframe>
              </td></tr>
    </table>
</body>

</html>