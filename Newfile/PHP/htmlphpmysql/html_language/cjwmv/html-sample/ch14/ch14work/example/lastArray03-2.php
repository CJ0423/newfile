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
 

        echo'<div id="all"><h1>世界倉鼠大學</h1><h2>成績輸入系統</h2> <h3>科系：'.$major.'</h3>班級：'.$level.'年'.$class.'班<div>班級人數：'.$numberOfStudents.'人</div><div>請輸入各科目成績</div>';
        // 接著要嘗試使用div與迴圈排版，此處需要注意的是架構問題等
        echo' <form method="post"action="lastArray03-3.php"><div class="css_table">
        <div style=display: table-row;>
        
        
        <div style="display: table-cell;
            border:solid;width:200px">座號</div>
        <div style="display: table-cell;
            border:solid;width:200px">姓名</div>';
   //將scor數值先帶入進來
            for($x=1;$x<=$numberOfSubjects;$x++){
                for($y=1;$y<=2;$y++){
                $key="scor".$x.$y;
                $scor[$x][$y]=$_POST[$key];
               
                
                
                }
                
                   }
//寫出科目
        for($x=1;$x<=$numberOfSubjects;$x++){
            echo'<div style="display: table-cell;
            border:solid;width:200px">'.$scor[$x][1].'('.$scor[$x][2].')</div>';
            echo '<input name="subjectsAndNumbers'.$x.'" type="hidden" value="'.$scor[$x][1].'('.$scor[$x][2].')">';
            echo '<input name="subjectsScore'.$x.'"type="hidden" value='.$scor[$x][2].'>';

        }
        for($x=1;$x<=$numberOfStudents;$x++){
           echo' <div style=display: table-row;>
           <div style="display: table-cell;border:solid;width:200px">'.$x.'</div>';
           for($y=0;$y<=$numberOfSubjects;$y++)
           echo' 
           <div style="display: table-cell;border:solid;width:200px"><input type="text" name="studentScore'.$x.$y.'"></div>';



            echo'</div>';
        }

    //y=0表示名字那一格
    
    
    




        echo'<input type="submit"><input type="reset"></form>
<input type="hidden"name="numberOfStudents"value="'.$numberOfStudents.'"</input>
<input type="hidden"name="numberOfSubjects"value="'.$numberOfSubjects.'"</input></div>
<input type="hidden"name="major"value="'.$major.'"</input>
<input type="hidden"name="level"value="'.$level.'"</input>
<input type="hidden"name="class"value="'.$class.'"</input>'
    ?>
</body>
</html>