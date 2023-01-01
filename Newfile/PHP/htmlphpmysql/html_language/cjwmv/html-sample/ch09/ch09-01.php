<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=big5">
      <title>if...else選擇結構</title>
   </head>
   <body>
      <?php 
         //取得傳送過來的資料
         $score=$_REQUEST["score"];		
         echo "你輸入的成績是：".$score."<p>";

         //if...else選擇結構
         if($score>60)
         {
	    echo "<font color='blue'>成績及格，恭喜您！</font>";
         }
      ?>
   </body>
</html>
