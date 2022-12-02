<html>
  <head>
     <title>
       雲天商城
     </title>
  </head>
  <body>
   <center>
    <h1>雲天購物商城</h1>
   </center>
<?php
/////////////  接收帳號、密碼  資料  ////////////////////////
    $idname=$_POST["idname"];
    $idpa=$_POST["idpa"];

/////////////  核對 帳號、密碼  是否為註冊會員資料  ////////////////////////
           // 連結MYSQL資料庫系統
	$link = mysqli_connect("localhost", "root");

           //開啟hkco資料庫
	$db_selected = mysqli_select_db($link, "hkco");

mysqli_query($link,"SET NAMES UTF8");

         //讀取 接收的帳號密碼資料
	$sql = "SELECT * FROM userid where `帳號` = '".$idname."'";
	$result = mysqli_query($link, $sql);

////  判斷是否有此帳號，及密碼是否正確  ////////////////////

      if(mysqli_num_rows($result)==0)   
      {
          header("Refresh:0; URL=login.php?ms=1");  //無此帳號
      }
      else
      {
        $rows = mysqli_fetch_row($result);
        if($rows[1]!=$idpa)
        {
          header("Refresh:0; URL=login.php?ms=2");      //密碼錯誤        
        }
        else
        {
          header("Refresh:0; URL=shopping.php?idname=$idname");     
        }  
      }

?>

</form>

  </body>
</html>