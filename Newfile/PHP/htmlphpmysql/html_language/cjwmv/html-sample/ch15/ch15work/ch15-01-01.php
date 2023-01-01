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
    class cart{
        //在類別內每一個宣告要再多一個var
        var $owner;
        var $price=300;
        var $goods;
        function add_item($title,$amt){
            $this->goods[$title] +=$amt;
            return $amt;
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>