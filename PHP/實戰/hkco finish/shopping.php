<html>
   <head>
      <title>XX商城</title>
   </head>
   <body>
      <table border="5" width="100%" height="100%">
         <tr height="100"><td colspan="3" align="center"><font size="7">雲天購物商城</font>
<?php  //////////  接收帳號資料  ///////////////
   $idname=$_GET["idname"];
               
             $link = mysqli_connect("localhost", "root");    //登入 mysql 資料庫系統
	     $db_selected = mysqli_select_db($link, "hkco" );     //開啟  hkco 資料庫
   mysqli_query($link,"SET NAMES utf8");                      //設定 中文資料為 utf8編碼

          //////////  讀取會員姓名、性別  ///////////////////
           //  透過資料庫抓取各種名字
	  $sql = "SELECT `姓名`,`性別` FROM userdata where `帳號` = '".$idname."'";
	  $result = mysqli_query($link, $sql);         
          $rows = mysqli_fetch_row($result);
        if($rows[1]=="F")
        {  echo "歡迎 ".$rows[0]." 小姐光臨本商城";  }
        else
        {  echo "歡迎 ".$rows[0]." 先生光臨本商城";  }
                                    
/////////  設定  session_ID  並啟動 srssion ///////////////////////
	ob_start();  //開啟輸出暫存器
        session_id($idname);   //指定session_ID
        session_start();       //啟動session
?>
         </td></tr>
         <tr><td valign="top" width="180"><br><br>
               <font size="6">

<?php       
////////////////// 讀取 hkco資料庫中product資料表的kind1資料(每項只要一筆) ///////////////

// disthinct就是將資料分割的方法 他將會把產品中的每一種相同資料各取一筆

             $sql = "SELECT distinct kind1 FROM product";                            //設定查詢資料條件
             $result = mysqli_query($link, $sql );                      //讀取資料

////////////////  將資料放入 $prna 陣列中  ///////////////////////////////////

        while ($row = mysqli_fetch_array($result, MYSQL_BOTH))          //置換資料廻圈
	{
            $prna[]=$row["kind1"];             //公司名稱置入 $co_na 陣列中
        }
  
 ///// 以 get 的方式傳送 帳號  ///////
       for($x=0;$x<count($prna);$x++)
       {
          echo '<a href="show.php?idname='.$idname.'&itemna='.$prna[$x].'" target="main">'.$prna[$x].'</a><br>';
       }
?>
                              
               </font>
              </td>
              <td>
<?php
          echo '<iframe name="main" src="show.php?itemna='.$prna[0].'" width="100%" height="100%"></iframe>';
?>
              </td>
              <td width="300">
                 <iframe name="shoppingcar" src="shoppingcar.php" width="100%" height="100%"></iframe>
              </td></tr>
       </table>
   </body>
</html> 