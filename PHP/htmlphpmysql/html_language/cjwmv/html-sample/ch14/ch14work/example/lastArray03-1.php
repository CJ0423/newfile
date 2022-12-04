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
    echo'<div id="all"><h1>世界倉鼠大學</h1><h2>成績系統</h2> <h3>成績單</h3>科系：'.$major.'班級：'.$level.'年'.$class.'班<div>請輸入各科目名稱與學分</div>';
// 接著要嘗試使用div與迴圈排版，此處需要注意的是架構問題等
echo' <form method="post"action="lastArray03-2.php"><div class="css_table">
<div style=display: table-row;>


<div style="display: table-cell;
    border:solid;width:200px">科目編號</div>
<div style="display: table-cell;
    border:solid;width:200px">科目名稱</div>
<div style="display: table-cell;
border:solid;width:200px";>學分</div></div>';



for($x=1;$x<=$numberOfSubjects;$x++){
echo'<div style=display: table-row;>
 <div style="display:table-cell;width:200px;border:solid">'.$x.'</div>';
    for($y=1;$y<=2;$y++){
        echo'
        <div style="display:table-cell;width:200px;border:solid"><input type="text" name="scor'.$x.$y.'"></input></div>';



    }




echo'</div>';
}

    
    

    //除了學號的名字每一格叫做scro $x.$y
    
    
    
echo'<input type="submit"><input type="reset">
<input type="hidden"name="numberOfStudents"value="'.$numberOfStudents.'"</input>
<input type="hidden"name="numberOfSubjects"value="'.$numberOfSubjects.'"</input></div>
<input type="hidden"name="major"value="'.$major.'"</input>
<input type="hidden"name="level"value="'.$level.'"</input>
<input type="hidden"name="class"value="'.$class.'"</input></form>
   </div>' ?>
</body>
</html>