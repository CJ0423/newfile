﻿<?php
////////////////////////////////////////////////////////////////////////////////////
//
//                      商品報價查詢系統---報表列印
//
////////////////////////////////////////////////////////////////////////////////////

         echo "<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=big5'>";
         echo "<TITLE>顯示所有記錄</TITLE>";

/////////////////////////////////////////////////////////////////////////////////////
//
//                      接收傳送資料
//                     
/////////////////////////////////////////////////////////////////////////////////////
//程式碼
/////////////////////////////////////////////////////////////////////////////////////

			$cona=$_POST["cona"];
                        $proitem=$_POST["proitem"];
                        $lopa=$_POST["lopa"];
                        $hipa=$_POST["hipa"];

       echo "<H1 ALIGN='CENTER'>零組件報價表</H1>";
       echo "您設定的查詢條件如下:<p>";
       echo "公司名稱:".$cona."   產品項目:".$proitem."<p>";
       echo "價格區間: 自 ".$lopa." 至 ".$hipa."<p>";

////////////////////////////////////////////////////////////////////////////////////
//
//                      登錄 mysql 資料庫系統
//                     
//                      開啟 product 資料庫
//
//                      設定查詢資料中文編碼型態為 utf8
//
/////////////////////////////////////////////////////////////////////////////////////
//程式碼
/////////////////////////////////////////////////////////////////////////////////////

                        $link = mysqli_connect("localhost", "root");
			$db_selected = mysqli_select_db($link, "product");
			mysqli_query($link, "SET NAMES utf8");

////////////////////////////////////////////////////////////////////////////////////
//
//                      進行查詢SQL語法設定
//
//               說明:因為 已固定 起 ~ 迄 價格
//      
//                    所以 只需判斷 公司名稱 及 產品項目 兩項條件
//
//                    共有 4 種狀態   全部         全部
//                                    全部           X
//                                      X          全部
//                                      X            X
//
/////////////////////////////////////////////////////////////////////////////////////
//程式碼
/////////////////////////////////////////////////////////////////////////////////////

    if(($cona=="全部") and ($proitem=="全部"))           //只設定價格區間
    {
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

////////////////////////////////////////////////////////////////////////////////////////////////////
//
//             進行 資料查詢作業
//
/////////////////////////////////////////////////////////////////////////////////////
//程式碼
/////////////////////////////////////////////////////////////////////////////////////

			$result = mysqli_query($link, $sql);

////////////////////////////////////////////////////////////////////////////////////////////////////
//
//             進行 資料列印作業
//
/////////////////////////////////////////////////////////////////////////////////////
//程式碼
/////////////////////////////////////////////////////////////////////////////////////	

             if(mysqli_num_rows($result)==0)
             {
                echo "<h1>查無符合條件資料";
             }
             else
             {
		
			echo "<TABLE BORDER='1' ALIGN='CENTER'><TR ALIGN='CENTER'>";
	
			while($meta = mysqli_fetch_field($result))
                        {
                           echo "<TD>" . $meta->name . "</TD>";					
			}
			echo "</TR>";
	
			while ($row = mysqli_fetch_array($result, MYSQL_BOTH))
			{
				echo "<TR>";			
				echo "<TD>" . $row["no"] . "</TD>";
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

			mysqli_free_result($result);
			mysqli_close($link);

echo "<a href='pro_select_set.php'>繼續查詢</a>";

?> 
