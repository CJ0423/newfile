<?php
  //// 設定資料名稱陣列  ///////////
  $daname=array("kind","prno","prna","photona","price","sty","quan","saquan");
  $workitem=$_POST["send"];
        ////  連結 hkco資料庫 product 資料表的對應項目中 /////////////////

                        $link = mysqli_connect("localhost", "root");
			$db_selected = mysqli_select_db($link, "hkco");
			mysqli_query($link, "SET NAMES utf8");

  if($workitem=="庫存不足產品")
  {
         ////  查詢 product 資料表中庫存量<安全存量的產品 /////////////////

           $sql="SELECT * from product where 庫存量 <= 安全存量";
           $result = mysqli_query($link, $sql);
 
                    echo "<h1>庫存量不足產品資料列表</h1>";		
			echo "<TABLE BORDER='1' ><TR ALIGN='CENTER'>";

                    while($meta = mysqli_fetch_field($result))
                    {
				echo "<TD>" . $meta->name . "</TD>";					
		    }
			echo "</TR>";
	
			while ($row = mysqli_fetch_array($result, MYSQL_BOTH))
			{
				echo "<TR>";			
				echo "<TD>" . $row["idno"] . "</TD>";
				echo "<TD>" . $row["kind1"] . "</TD>";
				echo "<TD>" . $row["產品編號"] . "</TD>";
				echo "<TD>" . $row["產品名稱"] . "</TD>";	
				echo "<TD>" . $row["圖檔"] . "</TD>";
				echo "<TD>" . $row["單價"] . "</TD>";	
				echo "<TD>" . $row["規格"] . "</TD>";
				echo "<TD>" . $row["庫存量"] . "</TD>";
				echo "<TD>" . $row["安全存量"] . "</TD>";													
				echo "</TR>";				
			}
			echo "</TABLE><P>" ;
		mysqli_free_result($result);
       echo '<a href="purchasein.php" target="_self">回採購系統</a>';
 
  }
  elseif($workitem=="庫存產品進貨")
  {
     $data[1]=$_POST[$daname[1]];
     $data[6]=$_POST[$daname[6]];

         ////  查詢 product 資料表中對應項目現有數量 /////////////////
           $sql="SELECT 庫存量 from product where 產品編號 = '$data[1]'";
           $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQL_BOTH);
           $num=$row['庫存量'];
           $data[6]+=$num;
		mysqli_free_result($result);

        ////  將購買數量加至 product 資料表的對應項目中 /////////////////       
   
           $sql = "UPDATE product SET 庫存量 = '$data[6]' WHERE 產品編號 = '$data[1]'";

           $result = mysqli_query($link, $sql);
			mysqli_free_result($result);
			mysqli_close($link);
           header("location:purchasein.php?msa='1'");
	   exit();
  }
  else
  {
  /////////  接收傳送資料 ////////////////////////////
     for($x=0;$x<count($daname);$x++)
     {
        $data[$x]=$_POST[$daname[$x]];
        if($data[$x]=="")
        {
           header("location:purchasein.php?msa='0'");
	   exit();
        }
     }
        ////  將資料新增至 hkco資料庫的 product 資料表中 /////////////////
   
           $sql="INSERT INTO product(kind1, 產品編號, 產品名稱, 圖檔, 單價, 規格, 庫存量, 安全存量) 
                      VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')";

           $result = mysqli_query($link, $sql);
			mysqli_free_result($result);
			mysqli_close($link);
           header("location:purchasein.php?msa='1'");
	   exit();
   }
?>