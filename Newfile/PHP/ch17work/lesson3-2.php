<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<TITLE>取得執行 INSERT 陳述式時，被影響的記錄數目。</TITLE>
	</HEAD>
	<BODY>
		<?php
			$link = mysqli_connect("localhost", "root");
			if (!$link)
			{
				die("無法建立連接<BR><BR>" . mysqli_connect_error());
			}	
					
			$db_selected = mysqli_select_db($link, "product");
			if (!$db_selected)
			{
   		 	die ("無法開啟 prodcut 資料庫<BR>" . mysqli_error($link));
			}
			mysqli_query($link,"SET NAMES UTF8");
			$sql = "INSERT INTO price(no, category, brand, specification, price, date, url) VALUES('340','CPU','AMD','AMD AthlonXP 2000+','1800','2004/7/25','www.amd.com')";
			$result = mysqli_query($link ,$sql);
			
			echo "執行 INSERT 陳述式時，共有 " . mysqli_affected_rows($link) . " 筆記錄受影響";
			
			mysqli_close($link);
		?> 
	</BODY>
</HTML>
