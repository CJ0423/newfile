<?php

//////////  接收帳號及session購物資料  ////////////////
      $idname=$_GET["id"];      //接收會員帳號
         session_id($idname);
         session_start(); 
            $evershop=$_SESSION["evershop"];       //已購物品項資料
            $np=$_SESSION["evershopnu"];           //已購物品項數量
echo $idname."<br>";

//////////  取得訂購時間  //////////////////////////
   $ortime=localtime(time(),true);
   $tim=($ortime["tm_year"]+1900)."-".($ortime["tm_mon"]+1)."-".$ortime["tm_mday"]." ".($ortime["tm_hour"]+6).":".$ortime["tm_min"].":".$ortime["tm_sec"];


//////////////////  連結資料庫系統  並 指定資料庫  //////////////////////////////
                 
   $link = mysqli_connect("localhost", "root");     //連結MYSQL資料庫系統
                 
   $db_selected = mysqli_select_db($link, "hkco");  //開啟hkco資料庫

   mysqli_query($link,"SET NAMES UTF8");

/////////////////////  顯示購物車內容  及新增入 ordersheet 資料表  ///////////////

          //////////  讀取會員姓名、性別  ///////////////////
	  $sql = "SELECT `姓名`,`性別` FROM userdata where `帳號` = '".$idname."'";
	  $result = mysqli_query($link, $sql);         
          $rows = mysqli_fetch_row($result);
        if($rows[1]=="F")
        {  echo $rows[0]." 小姐，妳的購物明細如下：<br>";  }
        else
        {  echo $rows[0]." 先生，妳的購物明細如下：<br>";  }
     
     echo '<table border="1" ><tr><td>編號</td><td>品名</td><td>單價</td><td>數量</td><td>合計</td></tr>';   
     $total=0;
     for($x=0;$x<$np;$x++)
     {
          $a=$evershop[$x][0];
          $b=$evershop[$x][3];
          $c=$evershop[$x][2];
	  $sql = "INSERT INTO `ordersheet`(客戶帳號,產品編號,數量,單價,訂購時間,貨單列印,出貨註記) Value('$idname','$a','$b','$c','$tim','n','n') ";
	  $result1 = mysqli_query($link, $sql);         
        echo '<tr>';
        for($y=0;$y<4;$y++)
        {
           echo '<td>'.$evershop[$x][$y].'</td>';
        }
          $pay=$evershop[$x][2]*$evershop[$x][3];
          echo '<td>'.$pay.'</td>';
          $total+=$pay;
        echo "</tr>";
     }
    echo "</table><p>";
mysqli_free_result($result);
@mysqli_free_result($result1);

         session_id($idname);
session_unset();
session_destroy();

echo "本次購買品項已確認輸入，如要繼續購買，請重新登入!謝謝!<p><br>";

echo '<a href="login.php" target="_top">繼續購買</a>';
?>