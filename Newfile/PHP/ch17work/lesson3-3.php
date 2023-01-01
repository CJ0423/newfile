<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<TITLE>顯示欄位資訊</TITLE>
	</HEAD>
	<BODY>
		<?php
			$link = mysqli_connect("localhost", "root");
			$db_selected = mysqli_select_db($link ,"product");
mysqli_query($link,"SET NAMES UTF8");
			$sql = "SELECT * FROM PRICE WHERE category = '主機板'";
			$result = mysqli_query($link, $sql);
			if (!$result)
			{
    		die("執行命令失敗 <BR>" . mysqli_connect_error());
			}
			
			echo "<TABLE WIDTH='400' BORDER='1'><TR ALIGN='CENTER'>";
			echo "<TD>欄位名稱</TD><TD>資料型態</TD><TD>最大長度</TD></TR>";
			
			while ( $meta = mysqli_fetch_field($result))   //將欄位訊息放到
                                     //$meta後欄位指標自動後移
			{
      	                        echo "<TR>";                           
				echo "<TD>" . $meta->name . "</TD>";
				echo "<TD>" . $meta->type . "</TD>";
				echo "<TD>" . $meta->max_length . "</TD>";								
				echo "</TR>";
			}			echo "</TABLE>" ;
			mysqli_close($link);
		?> 
	</BODY>
</HTML>
