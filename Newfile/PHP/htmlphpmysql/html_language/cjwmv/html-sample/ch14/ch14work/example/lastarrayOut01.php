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
    //加權分數
    $score=array("","",4,3,2,2);
    //呼叫表單內數值
    for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            $ans='scor'.$x.$y;
            $scor[$x][$y]=$_POST[$ans];
            echo$scor[$x][$y];

        }
    }
    echo '<table border="1"><tr><td>座號</td><td>姓名</td><td>國文4</td><td>英文3</td><td>數學2</td><td>化學2</td><td>總分</td><td>平均</td></tr>';
        
        //決定縱向座標迴圈
    for($x=1;$x<=5;$x++){
        echo '<tr><td>'.$x.'</td>';
        //決定橫向座標迴圈
        for($y=1;$y<=7;$y++){
           
            //第六格計算總分
            if($y==6){
                
                echo'<td>'.$total.'</td>';

            }
            //第七格計算加權平均
            elseif($y==7){
                $average=(int)((int)$total/11+0.5);
                //60分以下反紅
               if($average<60){ echo'<td style=color:red>'.$average.'</td>';}
               else{ echo'<td>'.$average.'</td>';
            $average=0;}
            }
            else{
                //60分以下反紅
                if($scor[$x][$y]<60){
            echo'<td style=color:red>'.$scor[$x][$y].'</td>';
            //加權分數計算
 }
        else{echo'<td>'.$scor[$x][$y].'</td>';}
            $total=$total+((int)$scor[$x][$y] * (int)$score[$y]);
        
        }
      }
      //座號1結束
      $total=0; }  

        echo '</tr>';

echo'</table>'
    
    
   
    ?>
</body>
</html>