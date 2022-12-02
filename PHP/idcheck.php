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

if(isset($_POST["ID"]))
    {    echo'<h3>身分證檢核器</h3>
        <form method="post"action="idcheck.php">
        <input type="text"name="ID"><br><input type="submit"><input type="reset">
        </form>';
        
    $fine=['A' => 10, 'B' => 11, 'C' => 12, 'D' => 13, 'E' => 14, 'F' => 15, 'G' => 16,
    'H' => 17, 'I' => 34, 'J' => 18, 'K' => 19, 'L' => 20, 'M' => 21, 'N' => 22,
    'O' => 35, 'P' => 23, 'Q' => 24, 'R' => 25, 'S' => 26, 'T' => 27, 'U' => 28,
    'V' => 29, 'X' => 30, 'Y' => 31, 'Z' => 33];
    $ID=$_POST["ID"];
    $ID=strtoupper($ID); 
   echo "您輸入的身份證為:".$ID."<br>判斷結果為:";
    //preg_match(/^開始   條件    $結束/）務必記得中間不要有空格喔
    if(!preg_match("/^[A-Z]{1}[1-2]{1}[0-9]{8}$/",$ID)){
        echo '長度驗證錯誤';
    }
    else{echo '長度驗證正確<br>';
        $IDarray=str_split($ID);
        $check=(int)($fine[$IDarray[0]]/10) ;
        $flash=(($fine[$IDarray[0]])-$check*10)*9;
        $check=$check+$flash;
        $i=8;
             for($x=1;$x<=8;$x++){
                 $flash=$IDarray[$x]*$i;
                 $check=$check+$flash;
                
                 $i--;
             } 
        if ($check%10==0){
             if($IDarray[9]==0){
                 echo'資料完全正確';
             }
             else{ echo'資料錯誤';}
        }
        else{
         $ans=$check%10;
             if((10-$ans)==$IDarray[9]){
             echo'資料完全正確';
             }
             else{ echo'資料錯誤';}
        }
    ;} 
 }
else{
    echo'<h3>身分證檢核器</h3>
    <form method="post"action="idcheck.php">
    <input type="text"name="ID"><br><input type="submit"><input type="reset">
    
    </form>';
}
    

    ?>
</body>
</html>