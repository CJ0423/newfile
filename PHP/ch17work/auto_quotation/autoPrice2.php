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
    // 接受資料
    $cona=$_POST["cona"];//公司名稱
    $proitem=$_POST["proitem"];//產品
    $lopa=$_POST["lopa"]; //最低價格
    $hipa=$_POST["hipa"];//最高價格
    echo "<H1 ALIGN='CENTER'>零組件報價表</H1>";
    echo "您設定的查詢條件如下:<br>";
    // 透過info做一個中繼站，讓後面的資料可以直接echo出來，但前提是一定要用雙引號喔!!
    $info="公司名稱 $cona 產品項目: $proitem <br>價格區間自 $lopa 至 $hipa";
    echo $info;
    
    // 重新和資料庫取得聯繫
    $link=mysqli_connect("localhost","sales","123456");
    $db_selected= mysqli_select_db($link,"product");
    mysqli_query($link,"SET NAMES UTF8");
    
    // 確定商品的選擇條件
    if(($cona=="全部") and ($proitem=="全部"))           //只設定價格區間
    {//只選擇價格區間
       $sql = "SELECT * FROM PRICE WHERE ((price>='$lopa') and (price<='$hipa'))";         
    }
    elseif(($cona=="全部") and ($proitem!="全部"))       //產品項目 及 價格區間 設定
    {
       $sql = "SELECT * FROM PRICE WHERE category='$proitem' and((price>='$lopa') and (price<='$hipa'))";   
    }
    elseif(($cona!="全部") and ($proitem=="全部"))       //公司名稱 及 價格區間 設定
    {
       $sql = "SELECT * FROM PRICE WHERE brand='$cona' and((price>='$lopa') and (price<='$hipa'))";
    }
    else                                                 //公司名稱 及 產品項目 及 價格區間 三項條件設定
    {
       $sql = "SELECT * FROM PRICE WHERE category='$proitem' and brand='$cona' and((price>='$lopa') and (price<='$hipa'))";
    }
    // 查詢資料 SQL就是我們剛剛選擇的條件
    $result = mysqli_query($link, $sql);
    //用來確定行或是列，列是橫向的有多少個，欄則是直向的有多少個。
    
    // $X=mysqli_num_rows($result);
    // print_r($X);以此題目為例，就是全部40筆

    if(mysqli_num_rows($result)==0)
    {
       echo "<h1>查無符合條件資料";
    }
    else
    {

   echo "<TABLE BORDER='1' ALIGN='CENTER'><TR ALIGN='CENTER'>";

//    幫我抓取所有符合這個條件的資料
   while($meta = mysqli_fetch_field($result))
               {
                  echo "<TD>" . $meta->name . "</TD>";					
   }
   echo "</TR>";

   while ($row = mysqli_fetch_array($result, 
   //我們需要一段來幫忙產生數字才可以用比較簡單的方式來產商品名字
   MYSQL_BOTH))
   {
       echo "<TR>";			
       echo "<TD>" . $row["no"] . "</TD>";
    //    選擇的品項
       echo "<TD>" . $row[1] . "</TD>";
       echo "<TD>" . $row["brand"] . "</TD>";
       echo "<TD>" . $row["specification"] . "</TD>";	
       echo "<TD>" . $row[4] . "</TD>";
       echo "<TD>" . $row[5] . "</TD>";	
       echo "<TD>" . $row["url"] . "</TD>";													
       echo "</TR>";				
   }
   echo "</TABLE>" ;
     }

////////////////////////////////////////////////////////////////////////////////
//    方法2.釋放佔用記體空間並登出資料庫
////////////////////////////////////////////////////////////////////////////////
//程式碼
/////////////////////////////////////////////////////////////////////////////////////
// 將記憶體清空
   mysqli_free_result($result);
//    關閉
   mysqli_close($link);

echo "<a href='autoPrice.php'>繼續查詢</a>";
    
    ?>
</body>
</html>