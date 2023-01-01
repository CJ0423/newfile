<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="margin-left:25%;">
    <div style="margin:auto ;"> <img width="300px" src="fish.jpg" alt=""></div>
    <h1>樂透遊戲</h1>
    <form action="latoobject.php" method="POST">
        <input name="game" type="submit" value="大樂透">
        <input name="game" type="submit" value="五三九">
        <input name="game" type="submit" value="威力彩">
    </form>

    <div>大樂透：六個不同號碼<br> 五三九：五個不同號碼<br>威力彩：六個不同號碼 一個六選一</div>
    <?php
    class lato{
        var $chose;
        
        
        function getnumber($number,$total){ 
            $z=0;
            $ball=array("");  //抽出來的球球
            if($number=='大樂透'){
                    $check=0;           //判斷用    
                    $level=6;           //抽幾個球球
                    for($x=1;$x<=$level;$x++){
                        $flash=rand(1,46);  //被抽出來的球
                        for($y=1;$y<=$x;$y++) //和前面的球比較
                        {
                            if($ball[$y]==$flash){  //有一樣的話不可以 check變成1
                                $check=1;
                            }
                        }
                    if($check==0){ $ball[$x]=$flash;    //這個數字可以列入中獎號碼 放入中獎陣列中
                    }
                    elseif($check==1){$x--;$check=0;$z=$z+1;} //check是1這個數字不能列入中獎號碼 於是重新抽獎，將x扣掉1 並且將判斷改為0 
                     }
             }
             //check終點
            else if($number=='五三九')
            {   
                $check=0;
                $level=5;
                for($x=1;$x<=$level;$x++)
                {
                    
                    $flash=rand(1,46);
                    for($y=1;$y<=$x;$y++)
                    {
                        if($ball[$y]==$flash){
                            $check=1;
                        }
                    }
                    
        
                if($check==0){ $ball[$x]=$flash;
                }
                elseif($check==1){$x--;$check=0;$z=$z+1;}
                }
            }
            elseif($number=='威力彩')
                {   $check=0;
                $level=6;
                for($x=1;$x<=$level;$x++){
                    
                    $flash=rand(1,46);
                    for($y=1;$y<=$x;$y++)
                    {
                        if($ball[$y]==$flash){
                            $check=1;
                        }
                    }
                    
        
                if($check==0){ $ball[$x]=$flash;
                }
                elseif($check==1){$x--;$check=0;$z=$z+1;}
        
            
               
            }
        
               $k=rand(1,8);
               $k="第二區:".$k; }

            echo'您選擇的是'.$number.'開獎號碼為:<br>'.$k.'<br>';
            
            for($x=1;$x<=$level;$x++){
                if($x==1)
                echo $ball[$x];
                if($x>=2)
                echo '.'.$ball[$x];
            }
            echo'重抽'.$z.'次';
            $z=0; }
        }
        
        










    
    $game=$_POST["game"];//先取得玩的遊戲
    $object=new lato("name");

        $object->chose=$game;
        $returnlato =$object->chose; ;
        echo "您選擇的是    ".$returnlato."<br>";
        echo "您的號碼如下：<br>";
        $number=$object->getnumber($returnlato,$total);
        
    ?>
</body>

</html>