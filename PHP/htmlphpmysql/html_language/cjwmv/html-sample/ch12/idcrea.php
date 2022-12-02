<html>
  <head>
      <title>身分證號碼產生器</title>
   </head>
   <body>
     <?php
    //設定縣市對應數字陣列
    $city=array("A"=>10,"B"=>11,"C"=>12,"D"=>13,"E"=>14,"F"=>15,"G"=>16,"H"=>17,"J"=>18,"K"=>19,"L"=>20,"M"=>21,"N"=>22,"P"=>23,"Q"=>24,"R"=>25,"S"=>26,"T"=>27,"U"=>28,"V"=>29,"X"=>30,"Y"=>31,"W"=>32,"Z"=>33,"I"=>34,"O"=>35);

    //接收縣市及性別資料
    $cityna=$_POST["cityna"];
    $sex=$_POST["sex"];

    //設定身分證陣列資料,$nu為計算規則數字
       $nu=0;
      $idnu[0]=$cityna;
       $nu=$nu+((int)($city[$cityna]/10)+($city[$cityna]%10)*9); 

      $idnu[1]=$sex;
       $nu=$nu+$idnu[1]*8;

    //設定第2 ~ 8的資料
      for($i=2;$i<=8;$i++)
      {
       $idnu[$i]=rand(0,9);
       $nu=$nu+$idnu[$i]*(9-$i);
      }
    
    //設定檢查碼資料
       $idnu[9]=(10-($nu%10))%10;

    //產生身分證號碼
/*
      $idpr="";
      for($i=0;$i<=9;$i++)
      {
        $idpr=$idpr.$idnu[$i];
      }
*/
     $idpr=implode("",$idnu);
     echo "您的身分證號碼為:<br>";
     echo $idpr;     
     ?>  
    </body>
</html>
