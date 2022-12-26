<html>
  <head>
     <title>
       XX商城
     </title>
  </head>
  <body>
   <center>
    <h1>雲天購物商城</h1>
   </center>

    請輸入帳號密碼<br>
    <form method="post" action="logincheck.php">
          帳號：<input type="text" name="idname" value=""><p>
          密碼：<input type="password" name="idpa" value=""><p>
           <input type="submit" name="submit" value="登入">
           <input type="reset" name="reset" value="重填"><p>
<?php
   $mess="";
   if(isset($_GET["ms"]))
   {
      $ms=$_GET["ms"];
        // 從logincheck回傳的
      if($ms==1)
      {  $mess="<font color='red'>無此帳號，請重新輸入 或 註冊成為會員</font>"; }
      else 
      {  $mess="<font color='red'>密碼不符，請重新輸入 或 與客服人員連絡</font>"; }
   }
   echo $mess;
?>
</form>

  </body>
</html>