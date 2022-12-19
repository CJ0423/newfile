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
// 為什麼是使用get呢       
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
         
  $data=array(0=>array("purses01","卡比商品1","../images/(1).jpg","10","good牌","purses01"),
    1=>array("purses02","卡比商品2","../images/(2).jpg","10","good牌","purses02"),
    2=>array("purses03","卡比商品3","../images/(3).jpg","10","good牌","purses03"),
    3=>array("purses04","卡比商品4","../images/(4).jpg","10","good牌","purses04"),
    4=>array("purses05","卡比商品5","../images/(5).jpg","10","good牌","purses05"),
    5=>array("purses06","卡比商品6","../images/(6).jpg","10","good牌","purses06"),
    6=>array("purses07","卡比商品7","../images/(7).jpg","10","good牌","purses07"),
    7=>array("purses08","卡比商品8","../images/(8).jpg","10","good牌","purses08"),
    8=>array("purses09","卡比商品9","../images/(9).jpg","10","good牌","purses09"),
    9=>array("purses10","卡比商品10","../images/(10).jpg","10","good牌","purses10"),
   
);

////////////////////  讀取已購物資料，修正數量  //////////////////////////////////////////
$prno=array(0,0,0,0,0,0,0,0,0,0);
if(isset($_SESSION["evershop"]))
{
       //////// 讀取已購物品項資料 //////////////////////////////////
          $evershop=$_SESSION["evershop"];             //已購物品項資料

        //    print_r($evershop) ;

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

echo '<form name="toy" method="post" action="shoppingcars.php" target="shoppingcars">';   
echo '<input type="hidden" name="idname" value="'.$idname.'">';                         //傳送 session_id() 帳號
echo '<input type="hidden" name="goodsnu" value="10">';                                //傳送貨品數量(如從資料庫中讀取,可獲得讀取資料筆數)
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
           <input type="submit" name="send" value="加入購物車">
       </td></tr>
       </table>
       </form>