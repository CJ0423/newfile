<?php
   $nu=0;    //計算已抽出的籤數
   $cp=0;    //判斷是否有重覆抽取，0 為没有，1 為有
   do
   {
       $pro=rand(1,10);    //隨機產生 1~10的數字
     //與先前已抽出的號碼比對看是否有重覆抽取
       for($x=0;$x<$nu;$x++)
       {
           if($pro==$ans[$x])   //如果有相同
           {
              $cp=1;             //$cp值設為1
           }
       }
     
       if($cp==0)     //比對完後，進行判斷，如果 $cp=0 表示没有重覆
       {
         $ans[$nu]=$pro;    //將產生的號碼，放入答案陣列
         $nu++;             //已抽出的籤數 +1
       }
       else
       {
          $cp=0;
       }
   }while($nu<=6);      //若抽出籤號數量小於6，則繼續抽

   Echo "抽出的號碼如下(1~10)(不可重覆)：<br>";
   For($x=0;$x<6;$x++)
   {
      Echo $ans[$x]." 、 ";
   }
  
?>
