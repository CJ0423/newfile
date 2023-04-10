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
    // 陣列的相加，首先要先理解到php會在相加的時候把所有的東西都變成數字，不能變成數字的話，就會自動變成0這是他最大的特點，但是為了讓轉換更加順利以及避免漏洞，可以加上intval()變成整數或是floatval()，此外若想要做到js那樣的轉換的話，直接把原本的+變成.做字串連接就可以了。
    $no1=array("1",2,3);
    $no2=array("3",6,1);
    $no3=array();
    $no3[0]=($no1[0]).($no2[0]);
   print_r($no3);//4 
    

//  函數測試和js幾乎一樣
    function firstFunction(){
        $abs=abs(-1);
        echo $abs;
    }
    // firstFunction()
    ?>
</body>
</html>