<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<TITLE>取得執行 SELECT 陳述式時，被影響的記錄及欄位數目。</TITLE>
	</HEAD>
	<BODY>
		<?php
			$link = mysqli_connect("localhost", "root");
			if (!$link)
			{
				die("無法建立連接<BR><BR>" . mysqli_connect_error());
			}	
			$db_selected = mysqli_select_db($link ,"class");
			if (!$db_selected)
			{
   		 	die ("無法開啟 class 資料庫<BR>" . mysqli_error($link));
			}
			// 使用萬國碼將資料印出來
mysqli_query($link,"SET NAMES UTF8");
			// 選擇的項目是
			$sql = "SELECT * FROM student WHERE csex= 'F'";
			// 篩選出有幾筆
			$result = mysqli_query($link, $sql);
			
			echo "女性 = 「學生」 的記錄有 " . mysqli_num_rows($result) . " 筆";
			echo "，包含 " . mysqli_num_fields($result) . " 個欄位。";
			
			mysqli_close($link);
		?> 
	</BODY> 
</HTML
