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
    $id = $_POST["id"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $next = 3;
    $account = $_POST["account"];
    $password = $_POST["password"];

    //身分證稽核
    $fine = [
        'A' => 10, 'B' => 11, 'C' => 12, 'D' => 13, 'E' => 14, 'F' => 15, 'G' => 16,
        'H' => 17, 'I' => 34, 'J' => 18, 'K' => 19, 'L' => 20, 'M' => 21, 'N' => 22,
        'O' => 35, 'P' => 23, 'Q' => 24, 'R' => 25, 'S' => 26, 'T' => 27, 'U' => 28,
        'V' => 29, 'X' => 30, 'Y' => 31, 'Z' => 33
    ];

    $id = strtoupper($id);
    echo "您輸入的身份證為:" . $id . "<br>判斷結果為:";
    //preg_match(/^開始   條件    $結束/）務必記得中間不要有空格喔
    if (!preg_match("/^[A-Z]{1}[1-2]{1}[0-9]{8}$/", $id)) {
        echo '長度驗證錯誤';
    } else {
        echo '長度驗證正確<br>';
        $idarray = str_split($id);
        $check = (int)($fine[$idarray[0]] / 10);
        $flash = (($fine[$idarray[0]]) - $check * 10) * 9;
        $check = $check + $flash;
        $i = 8;
        for ($x = 1; $x <= 8; $x++) {
            $flash = $idarray[$x] * $i;
            $check = $check + $flash;

            $i--;
        }
        if ($check % 10 == 0) {
            if ($idarray[9] == 0) {
                echo '資料完全正確';
            } else {
                echo '資料錯誤' . $next--;
            }
        } else {
            $ans = $check % 10;
            if ((10 - $ans) == $idarray[9]) {
                echo '資料完全正確';
            } else {
                echo '資料錯誤' . $next--;
            }
        };
    }
    if (!preg_match("/^[[:alnum:]]{4,12}[@]{1}[[:alnum:]]{3,9}/", $email)) {
        echo "email錯誤";
         $next--;
    } else {
        echo "email正確";
    }

    if (!preg_match("/^[0-9]{10}$/", $number)) {
        echo "電話錯誤"
        ;$next--;
    } else {
        echo "電話正確";
    }
    echo "印出".$next;
    if (true) {
        $accountArray = array($account);
        $passwordArray = array($account => $password);

        echo '<form action="signin1.php" method="post">';
        echo"<input  name='accountArray0' value='$accountArray[0]'>";

        echo"<input  name='ss' value=$passwordArray[$account]>";

        echo"<input type='submit'value='回登陸畫面'></form>";
    }


 



    ?>
</body>

</html>