<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=big5">
      <title>四則運算</title>
   </head>
   <body>
      <h1>四則運算</h1>
      <?php 
         //讀取資料(輸入)
         $nu1=$_POST["nu1"];
         $nu2=$_POST["nu2"];
         $selec=$_POST["selec"];

         //處理
         if($selec=="加")
         {
            $spl="+";
            $ans=$nu1+$nu2;
         }
         elseif($selec=="減")
         {
            $spl="-";
            $ans=$nu1-$nu2;
         }
         elseif($selec=="乘")
         {
            $ans=$nu1*$nu2;
            $spl="*";
         }
         else
         {
            $spl="/";
            $ans=(int)($nu1/$nu2);   //結果取整數
         }

         //列印
         echo "您輸入的第一數為：".$nu1."<p>";
         echo "您輸入的第二數為：".$nu2."<p>";
         echo "運算方法為：".$selec."<p><hr width='300' align='left'>";
         echo "答案：".$nu1."　".$spl."　".$nu2."　=　".$ans."<p>";         
?>
     <a href="ch09-03.htm">做下一題</a>
</body>
</html>
