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
$scores['John'] = 77;
$scores['Christine'] = 93;
$scores['Teddy'] = 82;
$scores['Grace'] = 56;
// 這一個練習題目高深莫測，可以想成他是一個一定會把所有東西都印出來的程式，內建的把每一個資料印出來，若以第一筆來說，這一題會將索引值傳入name內，並且把陣列的數值送到score所以我們就可以印出一號是誰等等。

echo "第一種寫法<br>";
foreach ($scores as $name => $score) {
    echo "$name's score is $score <br>";
} 
// 和第一種寫法的差別在於，這個資料不會引用索引數值，所以他雖然一樣印出了name卻只是用第一個，函式最後出來的name而已。
echo "第二種寫法<br>";
foreach ($scores as  $score) {
    echo "$name's score is $score <br>";
} 
/* Output :
John's score is 77
Christine's score is 93
Teddy's score is 82
Grace's score is 56*/
// https://www.php.net/manual/zh/control-structures.foreach.php
?>
</body>
</html>