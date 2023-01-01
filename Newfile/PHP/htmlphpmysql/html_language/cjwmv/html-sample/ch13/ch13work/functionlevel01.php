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
    function x($y){
        echo"<br>在函數內印出\$y". $y;
       $c=1;
        $y=$y+2;
        $c=$c+1;
        echo "<br>在函數內加減\$y". $y;
        return 3;
    }
    $c=x(7);
    echo"<br>印出（必定等於return出來的數值）1\$Ｃ". $c;
    echo"<br>嘗試印出\$y". $y;
    
    echo"小節全域變數在ｐｈｐ內不被區域變數影響，頂多受到回傳（return）影響而已，也就是說在ｐｈｐ內並不會有區域變數影響，全域變數的情況喔！ (除非使用了global否則根本沒有辦法影響)";
    ?>
</body>
</html>