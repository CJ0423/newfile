<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=big5">
      <title>四則運算</title>
   </head>
   <body>
      <h1>四則運算</h1>
      <?php
    if(isset($_POST["selec"]))
    { 
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
         $endans="答案：".$nu1."　".$spl."　".$nu2."　=　".$ans;
     }
     else
     {
         $nu1=0;
         $nu2=0;
         $endans="";
     }

         //列印表單及答案
      echo '<h2>請輸入任意二數：</h2>';

      echo '<form name="form1" method="post" action="ch09-04.php" >';
      echo '<p>第一數：<input type="text" name="nu1" value="'.$nu1.'">';
      echo '<p>第二數：<input type="text" name="nu2" value="'.$nu2.'">';
      echo '<p><h2>請選擇運算方式：</h2><p>';
                                          //最後有一個符號是全型空格
      echo '<input type="submit" name="selec" value="加">　';  
      echo '<input type="submit" name="selec" value="減">　';
      echo '<input type="submit" name="selec" value="乘">　';
      echo '<input type="submit" name="selec" value="除">　';
      echo '<p>'.$endans;

      echo '</form>';
      ?>

   </body>
</html>
