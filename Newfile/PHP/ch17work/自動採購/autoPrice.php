<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // 和資料庫連線
    $link=mysqli_connect("localhost","sales","123456");
    // 打開資料表
    $db_selected=mysqli_select_db($link,"product");
    // 決定印出格式要記得底下不要有一槓
    mysqli_query($link,"SET NAMES utf8");
    // 決定要印出的資料
    $sql="SELECT * FROM PRICE";
    // 利用函數，決定要印出來的資料
    $result = mysqli_query($link,$sql);
    // 將公司資料置入迴圈內


// 第一步將公司名稱與產品項目都放入陣列中，並且設定最低價與最高價格


    $lopa=20000;//此處也可以設定為會去抓取資料中的最高價，或者直接設定一個遠超過這些價格的數字。
    $hipa=0;
    while($row = mysqli_fetch_array($result,MYSQL_BOTH)){
        $cona[]=$row["brand"];
        // 公司名稱置入 $cona陣列中
        $proitem[]=$row["category"];
        //產品項目置入 $pro_item陣列中
        if($row["price"]<$lopa) {
            //最低價格變少遇到更低的價格時便改變自身價格，此概念類似氣泡排序法
            $lopa=$row["price"];
          }
          //最高價格遇到更高的價格的時候就會改變自身的價格，此概念同氣泡排序法
          if($row["price"]>$hipa)             //設定 迄價價格
          {
            $hipa=$row["price"];
          }
          
    }
    // 第二步釋放price資料表與資料所占用的空間並關閉資料庫(避免將電腦資源消耗殆盡)

    mysqli_free_result($result); //這段看起來像天書一班的文字叫做釋放記憶體資料，但其實就是把記憶體內的資料清除掉而已
    mysqli_close($link); //關閉資料庫。

    //第三部篩選公司名稱與產品項目
    function arrcheck($arr)                   // 定義篩選函數
    {              
        // 必須要先排序好，因為這樣才能讓一樣的資料放在一起。

      sort($arr);                             // 排序傳遞的陣列資料
      $ck=0;                                  // 進行篩選,設定初值
      $arch[$ck]=$arr[0];                     // 第一筆資料不會重覆
      for($a=1;$a<count($arr);$a++)           // 廻圈資料從第二筆開始篩選
      {     
        //將arr[a]的資料和arch[ck]的資料相互比較，如果兩個資料，不相等的時候，這個資料需要被納入，因此我們將CK的數值往後加一。最後將會得到一個重複資料被刪除掉，只有不同資料的數據。
        
         if($arr[$a]!=$arch[$ck])             // 如果 $arr[$a]的資料 與 $arch[$ck]的資料值不同
         {                                    //   (表示為新資料)
             $ck++;                           // $arch陣列的索引值加1(要置入新資料)
             $arch[$ck]=$arr[$a];              // 置入新資料
         }
      }
      return $arch;                           //篩選完成,回傳篩選資料
    }
       //篩選出公司的名稱和資料
    $co_na=arrcheck($cona); //cona是一個陣列帶入陣列也就是說這會讓co_na也變成一個陣列，整個資料都會被帶入裡面
  
    // print_r($cona);這會把所有公司的名字都印出來
    // UMAX [39] => AMD
 
    $pro_item=arrcheck($proitem);
    //篩選出函數產品項目資料等等

    //last建立表單
    echo "<table align='center'><tr><td>";
    echo "<form method='post' action='autoPrice2.php'>";        //表單條件設定
    echo "<h1>中新公司產品報價系統</h1>";
    echo "請輸入設定條件:<p>";
    echo "公司:<select name='cona' size='1'>";                      //公司下拉式表單設定
         echo "<option value='全部'>全部</option>";
       for($a=0;$a<count($co_na);$a++)
       {
         echo "<option value='".$co_na[$a]."'>".$co_na[$a]."</option>";
       }
    echo "</select><p>";
 
       echo "產品:<select name='proitem' size='1'>";                //產品下拉式表單設定
         echo "<option value='全部'>全部</option>";
       for($a=0;$a<count($pro_item);$a++)
       {
         echo "<option value='".$pro_item[$a]."'>".$pro_item[$a]."</option>";
       }
    echo "</select><p>";
 
    echo "價格: 自<input type='text' name='lopa' value='".$lopa."'>";   //價格文字表單設定
    echo "  到<input type='text' name='hipa' value='".$hipa."'><p>";
 
    echo "<input type='submit' name='submit' value='送出'>　";
    echo "<input type='reset' name='reset' value='重填'>　";
    echo "</form>";
    echo "</td></tr></table>";
 
    ?>
    
    </body>
</html>