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
    ob_start();
    session_id("s1");
    session_start();
    $data=array(0=>array("卡比","50"),1=>array("胖丁","10"),2=>array("種子","30"));
    echo'<form name="toy" method="post" action="trycar.php" target="shopcar">';
    echo'<input type="hidden" name="s1"  value="s1">'; //帳號名稱
    echo'<input type="hidden" name="quantity"value="3">';
    // 建立要放在購物車中的資料
    for($i=0;$i<=3;$i++){
        echo'<input type="hidden" name="new'.$i.'0" value="'.$data[$i][0].'">';
        echo'<input type="hidden" name="new'.$i.'1" value="'.$data[$i][3].'">';}


        for($x=0;$x<=2;$x++)
        {
          echo '<table border="1" >';
          echo '<tr align="center"><td>'.$data[$x][0].'</td></tr>';
       
          
          echo '<tr align="center"><td>單價:'.$data[$x][1].'</td></tr>';
          echo '</table>';
        }
       echo' <input type="submit" name="send" value="加入購物車"></form>'
    ?>
</body>
</html>