<html>
   <head>
      <title>XX商城</title>
   </head>
   <body>
      <table border="5" width="100%" height="100%">
         <tr height="100"><td colspan="3" align="center"><font size="7">雲天購物商城</font>
<?php  //////////  接收帳號資料  ///////////////
   $idname=$_POST["idname"];
   echo "歡迎 ".$idname." 光臨本商城";

//////////  設定  session_ID  並啟動 srssion ///////////////////////
	ob_start();  //開啟輸出暫存器
        session_id($idname);   //指定session_ID
        session_start();       //啟動session
?>
         </td></tr>
         <tr><td valign="top" width="180"><br><br>
               <font size="6">

<?php        ///// 以 get 的方式傳送 帳號  ///////
                    echo '<a href="ex17-01toy.php?idname='.$idname.'" target="main">玩具商城</a><br>';
                    echo '<a href="ex17-01purses.php?idname='.$idname.'" target="main">皮包天地</a><br>';
?>
                               服飾百貨<br>
               </font>
              </td>
              <td>
                 <iframe name="main" src="ex17-01toy.php" width="100%" height="100%"></iframe>
              </td>
              <td width="300">
                 <iframe name="shoppingcar" src="ex17-01shoppingcar.php" width="100%" height="100%"></iframe>
              </td></tr>
       </table>
   </body>
</html> 