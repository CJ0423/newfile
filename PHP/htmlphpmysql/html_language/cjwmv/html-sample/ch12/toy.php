<html>
   <head>
      <title>玩具商場</title>
      <style>
         .a01 {width:100%;height:100%}
         .a02 {float:left;width:150pt;height:270pt;margin:5pt;}
      </style>
   </head>
   <body>

      <table><tr width="100%" height="90%" ><td>
      <div class="a01">
           <h1>玩具商城</h1>
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

////////////////////////////////////////////////
         
       $data=array(0=>array("toy01","紳士鳥","bank-1.wmf","200","陶瓷","toy01"),
                   1=>array("toy02","呆呆鱷","bank-11.wmf","150","陶瓷","toy02"),
                   2=>array("toy03","星光魚","bank-13.wmf","300","陶瓷","toy03"),
                   3=>array("toy04","淘氣鳥","bank-37.wmf","120","橡膠","toy04"),
                   4=>array("toy05","花花豬","bank-56.wmf","180","陶瓷","toy05"),
                   5=>array("toy06","跳跳蛙","bank-123.wmf","110","橡膠","toy06"),
                   6=>array("toy07","綠毛怪","bank-150.wmf","80","橡膠","toy07"),
                   7=>array("toy08","乖巧免","bank-152.wmf","180","陶瓷","toy08"),
                   8=>array("toy09","聖誕老人","bank-164.wmf","250","陶瓷","toy09"),
                   9=>array("toy10","小飛象","bank-176.wmf","130","橡膠","toy10"));

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

      echo '<form name="toy" method="post" action="shoppingcar.php" target="shoppingcar">';   
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
           <input type="submit" name="send" value="加入購物車">(請點擊二次)
       </td></tr>
       </table>
       </form>