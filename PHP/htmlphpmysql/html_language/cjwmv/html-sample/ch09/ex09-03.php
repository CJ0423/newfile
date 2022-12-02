<html>
   <head>
      <title>面積計算</title>
   </head>
   <body>
     <?php
    if(isset($_POST["sel"]))   //判斷是否有傳送資料
    {   //有傳送

        $sel=$_POST["sel"];
        $hi=$_POST["hi"];       //三角形
        $low=$_POST["low"];
        $len=$_POST["len"];      //矩形
        $wid=$_POST["wid"];
        $hit=$_POST["hit"];     //梯形
        $flow=$_POST["flow"];
        $slow=$_POST["slow"];
        $rad=$_POST["rad"];     //圓形 
      
       if($sel=="三角形")
       {  
          if($hi<>0)     //判斷 有傳送高
          {
              if($low<>0)    //判斷 有傳送底
              {
                 /////////   計算面積(處理)及設定答案  /////////////
                 $area=$hi*$low/2;
                 $ans="三角形面積為：".$area;
                   $len=0;      //矩形
                   $wid=0;
                   $hit=0;     //梯形
                   $flow=0;
                   $slow=0;
                   $rad=0;     //圓形                 
              }
              else
              {
                $ans="計算資料不可為0 ";
              }
          }
          else
          {
             $ans="計算資料不可為0 ";
          }
       }
       elseif($sel=="矩形")
       {
          if($len<>0)
          {
              if($wid<>0)
              {
                 /////////   計算面積(處理)及設定答案  /////////////
                 $area=$len*$wid;
                 $ans="矩形面積為：".$area;
                 $hi=0;       //三角形
                 $low=0;
                 $hit=0;     //梯形
                 $flow=0;
                 $slow=0;
                 $rad=0;     //圓形
              }
              else
              {
                $ans="計算資料不可為0 ";
              }
          }
          else
          {
             $ans="計算資料不可為0 ";
          }
       }
       elseif($sel=="梯形")
       {
          if($hit<>0)
          {
              if($flow<>0)
              {
                 if($slow<>0)
                 {
                   /////////   計算面積(處理)及設定答案  /////////////
                   $area=$hit*($slow+$flow)/2;
                   $ans="梯形面積為：".$area;
                   $hi=0;       //三角形
                   $low=0;
                   $len=0;      //矩形
                   $wid=0;
                   $rad=0;     //圓形
                 }
                 else
                 {
                   $ans="計算資料不可為0 ";
                 }
              }
              else
              {
                $ans="計算資料不可為0 ";
              }
          }
          else
          {
             $ans="計算資料不可為0 ";
          }
       }
       else
       {
          if($rad<>0)
          {

                 /////////   計算面積(處理)及設定答案  /////////////
                 $area=$rad*$rad*3.14;
                 $ans="圓形面積為：".$area;
                 $hi=0;       //三角形
                 $low=0;
                 $len=0;      //矩形
                 $wid=0;
                 $hit=0;     //梯形
                 $flow=0;
                 $slow=0;
          }
          else
          {
             $ans="計算資料不可為0 ";
          }
        }
    }
    else       //////////   第1次執行  ////////
    {  
        $hi=0;       //三角形
        $low=0;
        $len=0;      //矩形
        $wid=0;
        $hit=0;     //梯形
        $flow=0;
        $slow=0;
        $rad=0;     //圓形
        $ans="面積為:";
    }
///////////  列印表單 ///////////////////
     ?>
     
      <h1>面積計算</h1>
      <h3>※要計算的資料不可為0<h3>
      <form method="post" action="ex09-03.php">
        <table border="1" cellspacing="0">
        <tr>
          <td>三角形<br>
          <?php
              echo '請輸入高：<input type="text" name="hi" size="4" value="'.$hi.'"><br>';
              echo '請輸入底：<input type="text" name="low" size="4" value="'.$low.'"><br><br>';
          ?>
              <input type="submit" name="sel" value="三角形">
          </td>
          <td>矩形<br>
          <?php
              echo '請輸入長：<input type="text" name="len" size="4" value="'.$len.'"><br>';
              echo '請輸入寬：<input type="text" name="wid" size="4" value="'.$wid.'"><br><br>';
          ?>
              <input type="submit" name="sel" value="矩形">
          </td>
          <td>梯形<br>
          <?php
              echo '請輸入高　：<input type="text" name="hit" size="4" value="'.$hit.'"><br>';
              echo '請輸入上底：<input type="text" name="flow" size="4" value="'.$flow.'"><br>';
              echo '請輸入下底：<input type="text" name="slow" size="4" value="'.$slow.'"><br>';
          ?>
              <input type="submit" name="sel" value="梯形">
          </td>
          <td>圓形<br>
          <?php
              echo '請輸入半徑：<input type="text" name="rad" size="4" value="'.$rad.'"><br>';
          ?>
              <br><br>
              <input type="submit" name="sel" value="圓形">

          </td>
        </tr>
        <tr>
           <td colspan="4">
               <?php echo $ans; ?>   <!-- php程式碼 -->           
           </td>
        </tr>
      </table>
    </form>
   </body>
</html>
