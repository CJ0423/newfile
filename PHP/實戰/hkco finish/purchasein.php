<html>
   <head>
      <title>採購系統</title>
   </head>
   <body>
<?php
   if(isset($_GET["msa"]))
   {
      if($_GET["msa"]=='0')
      {
         $message="輸入資料錯誤";
      }
      else
      {
         $message="資料已存入product資料表";
      }
   }
   else
   {
      $message="";
   }
?>
      <h1>HK公司採購系統</h1>
    <form name="purchase" method="post" action="purchase.php" ENCTYPE="multipart/form-data">
      <table border="1">
        <tr><td>產品類別：</td><td><input type="text" name="kind" size="10"></td><tr>
        <tr><td>產品編號：</td><td><input type="text" name="prno" size="10"></td><tr>
        <tr><td>產品名稱：</td><td><input type="text" name="prna" size="15"></td><tr>
        <tr><td>產品單價：</td><td><input type="text" name="price" size="8"></td><tr>
        <tr><td>產品規格：</td><td><input type="text" name="sty" size="10"></td><tr>
        <tr><td>產品數量：</td><td><input type="text" name="quan" size="10"></td><tr>
        <tr><td>安全存量：</td><td><input type="text" name="saquan" size="10"></td><tr>
        <tr><td>檔案上傳：</td><td><input type="file" name="fname" size="35"></td><tr>
        <tr><td colspan="2"><input type="submit" name="send" value="新增產品項目">
               　　<input type="submit" name="send" value="庫存產品進貨"><p>
                   <input type="submit" name="send" value="庫存不足產品"></td><tr>
      <table>
    </form>
<?php
   echo "<p>".$message;
?>
   </body>
</html>



