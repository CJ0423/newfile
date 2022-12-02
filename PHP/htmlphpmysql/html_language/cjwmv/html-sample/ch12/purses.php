<html>
   <head>
      <title>玩具商場</title>
      <style>
         .a01 {width:100%;height:100%}
         .a02 {float:left;width:150pt;height:270pt;margin:5pt;background-color:yellow;}
      </style>
   </head>
   <body>
      
      <table><tr width="100%" height="90%" ><td>
      <div class="a01">
           <h1>皮包專櫃</h1>
<?php
/////////////// 接收帳號資料   /////////////////
  if(isset($_GET["idname"]))
  {
     $idname=$_GET["idname"];
     session_id($idname);
     session_start();
  }
  else
  {
     session_start();
     $idname=session_id();
  }
echo $idname;
////////////////////////////////////////////////

       $data=array(0=>array("purses01","棋盤勇士","01.jpg","3730","polo","purses01"),
                   1=>array("purses02","經典綠格","02.jpg","660","polo","purses02"),
                   2=>array("purses03","活力滿點","03.jpg","4180","polo","purses03"),
                   3=>array("purses04","拉鍊扁包","04.jpg","3600","polo","purses04"),
                   4=>array("purses05","梯形拉錬","05.jpg","3600","polo","purses05"),
                   5=>array("purses06","迷人水餃包","06.jpg","4030","polo","purses06"),
                   6=>array("purses07","酷炫帥包","07.jpg","3280","polo","purses07"),
                   7=>array("purses08","文藝精神","08.jpg","3430","polo","purses08"),
                   8=>array("purses09","勇士型男","09.jpg","2760","polo","purses09"),
                   9=>array("purses10","束繩拉鍊小托特","10.jpg","3960","polo","purses10"));

////////////////////  讀取已購物資料，修正數量  //////////////////////////////////////////
  $prno=array(0,0,0,0,0,0,0,0,0,0);
  if(isset($_SESSION["evershop"]))
  {
         //////// 讀取已購物品項資料 //////////////////////////////////
            $evershop=$_SESSION["evershop"];             //已購物品項資料
            $evershopnu=$_SESSION["evershopnu"];         //已購物品項數量
         ////////  判斷並修改購買數量 ////////////
           for($x=0;$x<$evershopnu;$x++)
           {
              for($y=0;$y<10;$y++)
              {
                 if($evershop[$x][0]==$data[$y][0])
                 {
                    $prno[$y]=$evershop[$x][3];
                 }
              }
           }


  }
///////////////////////////  設定表單傳送資料   /////////////////////////////////////////
      echo '<form name="purses" method="post" action="shoppingcar.php" target="shoppingcar">';   
      echo '<input type="hidden" name="idname" value="'.$idname.'">';                         //傳送 session_id() 帳號
      echo '<input type="hidden" name="goodsnu" value="10">';                                 //傳送貨品數量(如從資料庫中讀取,可獲得讀取資料筆數)
      for($x=0;$x<=9;$x++)
      {
         echo '<input type="hidden" name="new'.$x.'0" value="'.$data[$x][0].'">';          //傳送貨品編號
         echo '<input type="hidden" name="new'.$x.'1" value="'.$data[$x][1].'">';          //傳送貨品名稱
         echo '<input type="hidden" name="new'.$x.'2" value="'.$data[$x][3].'">';          //傳送貨品單價
      }

      for($x=0;$x<=9;$x++)
      {
        echo '<table border="1" class="a02">';
        echo '<tr align="center"><td>'.$data[$x][0].'</td></tr>';
        echo '<tr align="center"><td>'.$data[$x][1].'</td></tr>';
        echo '<tr><td><img src="'.$data[$x][2].'" width="150" height="150"></td></tr>';
        echo '<tr align="center"><td>單價:'.$data[$x][3].'</td></tr>';
        echo '<tr align="center"><td>'.$data[$x][4].'</td></tr>';
        $name="new".$x."3";
        echo '<tr align="center"><td>購買<input type="text" name="'.$name.'" value="'.$prno[$x].'" size="4">個</td></tr>';
        echo '</table>';
      }
?>

       </div>
       </td></tr>
       <tr><td align="center">
           <input type="submit" name="purses" value="加入購物車">(請點擊二次)
       </td></tr>
       </table>
       </form>
  </body>
</html>