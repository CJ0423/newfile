﻿<html>
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
/*        
       $data=array(0=>array("toy01","紳士鳥","bank-1.jpg","200","陶瓷","toy01"),
                   1=>array("toy02","呆呆鱷","bank-11.jpg","150","陶瓷","toy02"),
                   2=>array("toy03","星光魚","bank-13.jpg","300","陶瓷","toy03"),
                   3=>array("toy04","淘氣鳥","bank-37.jpg","120","橡膠","toy04"),
                   4=>array("toy05","花花豬","bank-56.jpg","180","陶瓷","toy05"),
                   5=>array("toy06","跳跳蛙","bank-123.jpg","110","橡膠","toy06"),
                   6=>array("toy07","綠毛怪","bank-150.jpg","80","橡膠","toy07"),
                   7=>array("toy08","乖巧免","bank-152.jpg","180","陶瓷","toy08"),
                   8=>array("toy09","聖誕老人","bank-164.jpg","250","陶瓷","toy09"),
                   9=>array("toy10","小飛象","bank-176.jpg","130","橡膠","toy10"));
*/
///////////////////  讀取 toy 資料 ////////////////////////////////////////////////////
                 //連結MYSQL資料庫系統
			$link = mysqli_connect("localhost", "root");

                 //開啟hkco資料庫
			$db_selected = mysqli_select_db($link, "hkco");

mysqli_query($link,"SET NAMES UTF8");
                 //讀取 employee 資料表業務部門人員資料
			$sql = "SELECT * FROM product where kind1 = 'toy'";
			$result = mysqli_query($link, $sql);

                 //將資料放入 $data 陣列
                        $kn=0;
			while($rows = mysqli_fetch_row($result))
			{
						
				for($i = 0; $i < mysqli_num_fields($result); $i++)
				{
					$data[$kn][$i] = $rows[$i] ;					
				}
			    $kn++;					
			}
               $danu=mysqli_num_rows($result);

////////////////////  讀取已購物資料，修正數量  //////////////////////////////////////////
  $prno=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0);  //待修正
  if(isset($_SESSION["evershop"]))
  {
         //////// 讀取已購物品項資料 //////////////////////////////////
            $evershop=$_SESSION["evershop"];             //已購物品項資料
            $evershopnu=$_SESSION["evershopnu"];         //已購物品項數量
         ////////  判斷並修改購買數量 ////////////
           for($x=0;$x<$evershopnu;$x++)
           {
              for($y=0;$y<$danu;$y++)
              {
                 if($evershop[$x][0]==$data[$y][2])
                 {
                    $prno[$y]=$evershop[$x][3];
                 }
              }
           }


  }
///////////////////////////  設定表單傳送資料   /////////////////////////////////////////
      echo '<form name="purses" method="post" action="ex17-01shoppingcar.php" target="shoppingcar">';   
      echo '<input type="hidden" name="idname" value="'.$idname.'">';                         //傳送 session_id() 帳號
      echo '<input type="hidden" name="goodsnu" value="'.$danu.'">';                                 //傳送貨品數量(如從資料庫中讀取,可獲得讀取資料筆數)
      for($x=0;$x<$danu;$x++)
      {
         echo '<input type="hidden" name="new'.$x.'0" value="'.$data[$x][2].'">';          //傳送貨品編號
         echo '<input type="hidden" name="new'.$x.'1" value="'.$data[$x][3].'">';          //傳送貨品名稱
         echo '<input type="hidden" name="new'.$x.'2" value="'.$data[$x][5].'">';          //傳送貨品單價
      }

      for($x=0;$x<$danu;$x++)
      {
        echo '<table border="1" class="a02">';
        echo '<tr align="center"><td>'.$data[$x][2].'</td></tr>';
        echo '<tr align="center"><td>'.$data[$x][3].'</td></tr>';
        echo '<tr><td><img src="'.$data[$x][4].'" width="150" height="150"></td></tr>';
        echo '<tr align="center"><td>單價:'.$data[$x][5].'</td></tr>';
        echo '<tr align="center"><td>'.$data[$x][6].'</td></tr>';
        $name="new".$x."3";
        echo '<tr align="center"><td>購買<input type="text" name="'.$name.'" value="'.$prno[$x].'" size="4">個</td></tr>';
        echo '</table>';
      }
?>

       </div>
       </td></tr>
       <tr><td align="center">
           <input type="submit" name="purses" value="加入購物車">
       </td></tr>
       </table>
       </form>
  </body>
</html>