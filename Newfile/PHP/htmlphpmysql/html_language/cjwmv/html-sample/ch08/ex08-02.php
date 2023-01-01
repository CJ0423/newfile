<html>
   <head>
      <title>成績計算</title>
   </head>
   <body>
      <h1>成績計算</h1>
     <?php
       /////////   接收資料(輸入)  ///////////////////
       $ch=$_POST["ch"];
       $en=$_POST["en"];
       $ma=$_POST["ma"];
       $ph=$_POST["ph"];

       /////////   計算總分及平均(處理)  /////////////
       $total=$ch+$en+$ma+$ph;
       $avg=$total/4;

       /////////   列印表單        ///////////////////
       echo "國文：".$ch."<br>";
       echo "英文：".$en."<br>";
       echo "數學：".$ma."<br>";
       echo "物理：".$ph."<br>";
       echo "<hr width='300' align='left'>";
       echo "總分：" .$total."　　平均：".$avg."<br>";
     ?>
  <a href="ex08-02.htm">做下一題</a>

   </body>
</html>
