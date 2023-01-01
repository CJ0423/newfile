<html>
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=big5">
     <title>輸出指令的應用</title>
   </head>
   <body>
      <?php 
        $sna="PHP程式班";

        //輸出變數$sna所儲存的資料並指定以H2標籤字顯示
        echo "<h2>".$sna."</h2>";		
        echo "60人";   // 也可用 echo (60)."人";
        echo $sna."<br>";  //輸出變數值並且加入換行標籤
         print ("<font color=red>也可以print來輸出資料</font><p>");

           echo <<< end
          顯示相關資料 <br>
           show multiline data
end;      //end; 一定要從第1 欄開始
      ?>

   </body>
</html>
