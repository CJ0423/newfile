<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="100%"><tr align="center"><td>
    <form name="lerto" method="post" action="work1.php">
       <table align="center">
         <tr align="center"><td><img src="th.jpg"><h1>財神電腦選號系統</h1></td></tr>
         <tr align="center"><td><input type="submit" name="sen" value="威力彩"></td></tr>
         <tr align="center"><td><input type="submit" name="sen" value="大樂透"></td></tr>
         <tr align="center"><td><input type="submit" name="sen" value="今彩539"></td></tr>
       </table>
    </form>
     </td></tr>
     <tr align="center"><td><br><br>

<?php
function number(){
    for($number=38;$number-6>=33;$number--)            //應用廻圈產生6個號碼
    {
      $k=rand(1,$number);                  //從1~$a間隨機產生一個數字
      global $lertonum1;
      $ans[]=  $lertonum1[$k];        //將第$k位置的號碼資料,放到選取資料陣列
      $lertonum1[$k]=$lertonum1[$number];  //$k位置的號碼己被取走，可將最後一個位置的號碼移至此位置
      echo "s";
    }

}

if(isset($_POST["sen"]))
{
   //設定彩券資料陣列
 for($a=1;$a<=49;$a++)
{
  $lertonum1[$a]=$a;     //第一區號碼
}
   //接收前台傳送資料
 $sen=$_POST["sen"];

  //
  //判斷樂彩種類及產生對應號碼
  //
if($sen=="威力彩")
{
    //
    //第一區38選6
    //
 number($number=38,$number-6);


    //
    //第二區8選1
    //
      $ans2=rand(1,8);                  //從1~8間隨機產生一個數字
      $p=6;   //列印資料筆數用
}
elseif($sen=="大樂透")
{
    //
    //第一區49選6
    //
    for($a=49;$a>=44;$a--)            //應用廻圈產生6個號碼
    {
      $k=rand(1,$a);                  //從1~$a間隨機產生一個數字

      $ans[]=$lertonum1[$k];        //將第$k位置的號碼資料,放到選取資料陣列
      $lertonum1[$k]=$lertonum1[$a];  //$k位置的號碼己被取走，可將最後一個位置的號碼移至此位置
    }
      sort($ans);
      $p=6;   //列印資料筆數用
}
else
{
    //
    //第一區39選5
    //
    for($a=39;$a>=35;$a--)            //應用廻圈產生5個號碼
    {
      $k=rand(1,$a);                  //從1~$a間隨機產生一個數字

      $ans[]=$lertonum1[$k];        //將第$k位置的號碼資料,放到選取資料陣列
      $lertonum1[$k]=$lertonum1[$a];  //$k位置的號碼己被取走，可將最後一個位置的號碼移至此位置
    }
      sort($ans);
      $p=5;   //列印資料筆數用
}

  //
  //列印報表
  //
  echo "<h1>".$sen."</h1>";
  echo "電腦為你產生的號碼如下:<br>第一區:";
for($a=0;$a<$p;$a++)
{
  echo $ans[$a].",";
}
  echo "<br>";
  if($sen=="威力彩")
  {
    echo "第二區號碼:".$ans2."<br>";
  }
}
else
{
   echo "祝您好運亨通!請點樂彩項目";
}
?>

</body>
</html>