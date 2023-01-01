<html>
   <head>
      <title>面積計算</title>
   </head>
   <body>
     <?php
       /////////   接收資料(輸入)  /////////////
       $len=$_POST["len"];
       $wid=$_POST["wid"];

       /////////   計算面積(處理)  /////////////
       $area=$len*$wid;

       /////////   列印表單        /////////////
     ?>
      <h1>面積計算</h1>
      <table border="1" cellspacing="0">
        <tr>
          <td>三角形<br>
            <form method="post" action="ch08-19-1.php">
              請輸入高：<input type="text" name="hi" size="4"><br>
              請輸入底：<input type="text" name="low" size="4"><br><br>
              <input type="submit" value="送出">
            </form>
          </td>
          <td>矩形<br>
            <form method="post" action="ch08-19-2.php">
            <?php
              echo '請輸入長：<input type="text" name="len" size="4" value="'.$len.'"><br>';
              echo '請輸入寬：<input type="text" name="wid" size="4" value="'.$wid.'"><br><br>';
             ?>
              <input type="submit" value="送出">
            </form>
          </td>
          <td>梯形<br>
            <form method="post" action="ch08-19-3.php">
              請輸入高　：<input type="text" name="hi" size="4"><br>
              請輸入上底：<input type="text" name="flow" size="4"><br>
              請輸入下底：<input type="text" name="slow" size="4"><br>
              <input type="submit" value="送出">
            </form>
          </td>
          <td>圓形<br>
            <form method="post" action="ch08-19-4.php">
              請輸入半徑：<input type="text" name="rad" size="4"><br>
              <br><br>
              <input type="submit" value="送出">
            </form>
          </td>
        </tr>
        <tr>
           <td>面積為：</td>
           <td>面積為：
             <?php echo $area; ?>    <!-- php程式碼 -->
           </td>
           <td>面積為：</td>
           <td>面積為：</td>
        </tr>
      </table>
   </body>
</html>
