<html>
   <head>
      <title>成績計算</title>
   </head>
   <body>
      <h1>成績計算</h1>
     <?php
       /////////   接收資料(輸入)  ///////////////////
       $class=$_POST["class"];
       $seno=$_POST["seno"];
       $ch=$_POST["ch"];
       $en=$_POST["en"];
       $ma=$_POST["ma"];
       $ph=$_POST["ph"];

       /////////   計算總分及平均(處理)  /////////////
       $total=$ch+$en+$ma+$ph;
       $avg=$total/4;
       if($ch>=60)   //國文及格判斷
       {
          $chleve="<font color='blue'>及格</font>";
       }
       else
       {
          $chleve="<font color='red'>不及格</font>";
       } 
          if($en>=60)   //英文及格判斷
          {
             $enleve="<font color='blue'>及格</font>";
          }
          else
          {
             $enleve="<font color='red'>不及格</font>";
          } 
       if($ma>=60)   //數學及格判斷
       {
          $maleve="<font color='blue'>及格</font>";
       }
       else
       {
          $maleve="<font color='red'>不及格</font>";
       } 
          if($ph>=60)   //物理及格判斷
          {
             $phleve="<font color='blue'>及格</font>";
          }
          else
          {
             $phleve="<font color='red'>不及格</font>";
          } 
       /////////   列印表單(表格)        ///////////////////
       echo "<table border='1'>";
       echo "<tr><th colspan='3'><font size='5'>成績單</font></th></tr>";
       echo "<tr><td colspan='3'>班級：".$class."　　座號：".$seno."</td></tr>";
       echo "<tr><td>科目</td><td>分數</td><td>及格判斷</td></tr>";
       echo "<tr><td>國文：</td><td>".$ch."</td><td>".$chleve."</td></tr>";
       echo "<tr><td>英文：</td><td>".$en."</td><td>".$enleve."</td></tr>";
       echo "<tr><td>數學：</td><td>".$ma."</td><td>".$maleve."</td></tr>";
       echo "<tr><td>物理：</td><td>".$ph."</td><td>".$phleve."</td></tr>";
       echo "<tr><td colspan='3'>總分：".$total."　　平均：".$avg."</td></tr>";
       echo "</table><p>";
     ?>
  <a href="ex08-02.htm">做下一題</a>

   </body>
</html>
