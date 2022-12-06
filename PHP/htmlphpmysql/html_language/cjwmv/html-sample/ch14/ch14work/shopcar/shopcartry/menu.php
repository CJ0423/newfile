<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        #all {
            width: 100%;
            height: 100vh;
            background-color: bisque;
            display: flex;
            margin: 0px;
            padding: 0px;
        }

        .main {
            width: 75%;
            height:99vh;
            background-color: aqua;
        }
        #shopcar{width: 25%;
            background-color: greenyellow;

        }
    </style>
</head>

<body>

    <?php
    ?>
  
    <div id="all">
        
        <div id="shopcar" "><iframe name="shopcar" src="./trycar.php" frameborder="0"></iframe></div>
        <div class="main">  <iframe class="main"  src="./shop.php" frameborder="0"></iframe></div>

    </div>




</body>

</html>