<html>
   <head>
      <title>購物車</title>
   </head>
   <body>
      <h2>購物車</h2>
<?php
/////////////// 接收帳號資料   /////////////////
/*
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
*/
///////////  判斷是否已有購物資料  //////////////
  if(!(isset($_SESSION["evershop"]) or isset($_POST["goodsnu"])))
  {
     echo "目前無購物資料<br>";
  }
  else
  {
    //////////// 接收傳送購物資料 //////////////
      $goodsnu=$_POST["goodsnu"];
      $idname=$_POST["idname"];
         session_id($idname);
         session_start(); 

      for($x=0;$x<$goodsnu;$x++)     //接收本次購物資料廻圈
      {
         for($y=0;$y<4;$y++)
         {
            $name="new".$x.$y;         
            $newshop[$x][$y]=$_POST[$name];
         }                 
      }
      
  ///////////////  判斷是否已有購物資料 ///////////////////////////////
      if(isset($_SESSION["evershop"]))    //已有購物資料
      {
         //////// 讀取已購物品項資料 //////////////////////////////////
            $evershop=$_SESSION["evershop"];             //已購物品項資料
            $evershopnu=$_SESSION["evershopnu"];         //已購物品項數量
         ///////  進行購物品項資料更新   //////////////////////////////
            $realnewnu=0;       //本次新增項目統計
            for($x=0;$x<$goodsnu;$x++)     //本次購買品項
            {
                 $isbeen=0;              //判斷是否為已購資料，預設為未購
                 for($y=0;$y<$evershopnu;$y++)
                 {  
                    if($newshop[$x][0]==$evershop[$y][0])  //已有購物，進行數量資料變動
                    {
                        $evershop[$y][3]=$newshop[$x][3];
                        $isbeen=1;      //判斷變數改為已購        
                    }
                 }
                 if(($isbeen==0) AND ($newshop[$x][3]<>0))      //加入新購品項資料
                 {
                        
                        $evershop[$evershopnu+$realnewnu][0]=$newshop[$x][0];
                        $evershop[$evershopnu+$realnewnu][1]=$newshop[$x][1];
                        $evershop[$evershopnu+$realnewnu][2]=$newshop[$x][2];
                        $evershop[$evershopnu+$realnewnu][3]=$newshop[$x][3];
                        $realnewnu++;
                 }
             }        
            $newnu=$evershopnu+$realnewnu;        //更新購買品項數量

         ////////// 愓除數量為0的項目 //////////////////////
            $k=$newnu;
            $np=0;
            for($x=0;$x<$k;$x++)
            {
               if($evershop[$x][3]<>0)     //項目有購，進行轉檔
               {
                    for($y=0;$y<4;$y++)
                    {
                       $tem[$np][$y]=$evershop[$x][$y];
                    }
                    $np++;
               }
               else
               {
                    $newnu--;
               }
            }
            $_SESSION["evershop"]=$tem; //存入購買品項內容
            $_SESSION["evershopnu"]=$newnu; //存入購買品項數量

      }
      else    //没有已購物資料
      {
         ////////// 愓除數量為0的項目 //////////////////////
         for($x=0;$x<$goodsnu;$x++)     
         {
           $np=0;
           if($newshop[$x][3]<>0)     //項目有購，進行轉檔
           {
               for($y=0;$y<4;$y++)
               {
                   $tem[$np][$y]=$newshop[$x][$y];
               }
               $np++;
           }
         }
      
         $_SESSION["evershop"]=$tem; //存入購買品項內容
         $_SESSION["evershopnu"]=$np; //存入購買品項數量
         $evershop=$tem;             //已購物品項資料
         $newnu=$np;             //已購物品項數量
      }
/////////////////////  顯示購物車內容  //////////////////////////////////////////
     echo '<table border="1" ><tr><td>編號</td><td>品名</td><td>單價</td><td>數量</td><td>合計</td></tr>';   
     $total=0;
     for($x=0;$x<$newnu;$x++)
     {
        echo '<tr>';
        for($y=0;$y<4;$y++)
        {
           echo '<td>'.$evershop[$x][$y].'</td>';
        }
          $pay=$evershop[$x][2]*$evershop[$x][3];
          echo '<td>'.$pay.'</td>';
          $total+=$pay;
     }
        echo '<tr><td colspan="5">購物金額總計：'.$total.'元</td></tr></table>';
  }
////////////////////////////////////////////////

echo "如要修改購物內容:<br>請至商品區修改";
?>
   </body>
</html>