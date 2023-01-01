<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="lastArray03-1.css">

</head>
<body>
    <?php
            $numberOfSubjects=$_POST["numberOfSubjects"];//幾個科目
            
            $numberOfStudents=$_POST["numberOfStudents"];//幾個學生
            $major=$_POST["major"];//科系
            $level=$_POST["level"];//年級
            $class=$_POST["class"];//班級
            $subtotal=0;//總分加總
            $totalsubjectsScore=0;//總學分數
            $lostscore=0;
   
            //取得名字與分數
            for($x=1;$x<=$numberOfStudents;$x++){
                for($y=0;$y<=$numberOfSubjects;$y++){
                $key='studentScore'.$x.$y;
                $studentScore[$x][$y]=$_POST[$key];
               
               }}
             


               //總共學分
            for($x=1;$x<=$numberOfSubjects;$x++){
                $key="subjectsScore".$x;
                $subjectsScore[$x]=$_POST[$key];
                
                $totalsubjectsScore=$totalsubjectsScore+$subjectsScore[$x];
                

            }
              //取得科目與學分名稱 如國文（3）
            for($x=1;$x<=$numberOfSubjects;$x++){
              
                $key="subjectsAndNumbers".$x;
                $scor[$x]=$_POST[$key];
               
                
                   }
    
//先算出名次

//輸入氣泡排序法之資料
for($x=1;$x<=$numberOfStudents;$x++){
$rankno1[$x]=1;


}


//匯入總分資料
for($x=1;$x<=$numberOfStudents;$x++){
     for($y=1;$y<=$numberOfSubjects;$y++){

        $total=$studentScore[$x][$y]*$subjectsScore[$y];
         
        $subtotal=$subtotal+$total;

        $total=0; 
        $rank[$x]=$subtotal; }

        $subtotal=0;}  

//開始使用泡沫排序法
for($x=1;$x<=$numberOfStudents;$x++){
    for($y=1;$y<=$numberOfStudents;$y++){
        if($rank[$x]<$rank[$y]){$rankno1[$x]++;

        }
    }
}

                   echo'<div id="all"><h1>世界倉鼠大學</h1><h2>成績輸入系統</h2> <h3>科系：'.$major.'</h3>班級：'.$level.'年'.$class.'班<div>班級人數：'.$numberOfStudents.'人</div><div>請輸入各科目成績</div>';
                   // 接著要嘗試使用div與迴圈排版，此處需要注意的是架構問題等
                   echo' <form method="post"action="lastArray03-3.php"><div class="css_table">   
                   
                   <div style=display: table-row;>

                   <div style="display: table-cell;
                       border:solid;width:100px">座號</div>
                   <div style="display: table-cell;
                       border:solid;width:100px">姓名</div>';
                    for($x=1;$x<=$numberOfSubjects+4;$x++){
                        if($x==($numberOfSubjects+1)){
                            echo'
                            <div style="display: table-cell;
                                border:solid;width:100px">總分</div>';
                        }
                        elseif($x==($numberOfSubjects+2)){
                            echo'
                            <div style="display: table-cell;
                                border:solid;width:100px">平均</div>';
                        }
                        elseif($x==($numberOfSubjects+3)){
                            echo'
                            <div style="display: table-cell;
                                border:solid;width:100px">名次</div>';
                        }
                        elseif($x==($numberOfSubjects+4)){
                            echo'
                            <div style="display: table-cell;
                                border:solid;width:100px">實得學分</div>';
                        }
                       else{echo'
                        <div style="display: table-cell;
                            border:solid;width:100px">'.$scor[$x].'</div>';}
                    }
                    echo'</div>';
                    for($x=1;$x<=$numberOfStudents;$x++){
                       echo'<div style=display: table-row;><div style="display: table-cell;
                       border:solid;width:100px">'.$x.'</div>';

                        for($y=0;$y<=$numberOfSubjects+4;$y++){
                            if($y==0){  echo'<div style="display: table-cell;border:solid;width:100px">'.$studentScore[$x][$y].'</div>';}   
                        elseif(($y>0)and($y<=$numberOfSubjects)){
                            if($studentScore[$x][$y]<60){
                                echo'<div style="color:red;display: table-cell;border:solid black;width:100px">'.$studentScore[$x][$y].'</div>';
                                $lostscore=$lostscore+$subjectsScore[$y];
                            }
                            else{  echo'<div style="display: table-cell;
                                border:solid;width:100px">'.$studentScore[$x][$y].'</div>';}

                            $total=$studentScore[$x][$y]*$subjectsScore[$y];
                            
                            $subtotal=$subtotal+$total;
                   
                            $total=0;}
                        elseif($y==($numberOfSubjects+1)){ echo'<div style="display: table-cell;border:solid;width:100px">'.$subtotal.'</div>';
                        $rank[$x]=$subtotal;
                        }
                        elseif($y==$numberOfSubjects+2){echo'<div style="display: table-cell;border:solid;width:100px">'.(int)($subtotal/$totalsubjectsScore+0.5).'</div>';}
                        elseif($y==$numberOfSubjects+3){echo'<div style="display: table-cell;border:solid;width:100px">'.$rankno1[$x].'</div>';}

                        elseif($y==$numberOfSubjects+4){echo'<div style="display: table-cell;border:solid;width:100px">'.$totalsubjectsScore-$lostscore.'</div>';$lostscore=0;}
                    }
                    echo' </div>'; 
                $subtotal=0;
    
            }
                
                   echo'</div>';
 
    echo'</div></form>'
    ?>
</body>
</html>