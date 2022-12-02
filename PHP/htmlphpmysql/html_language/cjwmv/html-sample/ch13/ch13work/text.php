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
    $foreach=array("胖"=>"牛","糖果"=>"吃","草");

    foreach($foreach as $value){
        echo "$value<br>";
    }

    foreach($foreach as $key=> $value){
        echo "索引值$key  內容數值$value<br>";

    }
    
    
    
    
    
    ?>
</body>
</html>