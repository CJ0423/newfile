<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>伺服端的PHP程式</title>
</head>
<body>
      <?php 
       //////// 接收表單傳送資料（輸入）/////////////////
         $len=$_POST["len"];
         $wid=$_POST["wid"];
       /////// 進行面積計算 (處理) ///////////////////////
         $area=$len*$wid;
       /////// 列印報表 (輸出)  ////////////////////////////
         echo "<h2><font color='purple'>矩形的面積計算</font></h2>";
         echo "矩形的長為 : ".$len."<p>";
         echo "矩形的寬為 : ".$wid."<p><hr>";
         echo "矩形的面積為 : ".$area."<p>";
?>
</body>
</html>

