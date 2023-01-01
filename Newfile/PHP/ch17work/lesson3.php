<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<TITLE>執行 SELECT 陳述式</TITLE>
	</HEAD>
	<BODY>
		<?php
			$link = mysqli_connect("localhost", "root");
			if (!$link)
			{
				die("無法建立連接<BR><BR>" . mysqli_connect_error());
			}	
            //把資料傳到students 
			$db_selected = mysqli_select_db($link ,"students");
			if (!$db_selected)
			{
   		 	die ("無法開啟 prodcut 資料庫<BR>" . mysqli_error($link));
			}
			
			$sql = "SELECT * FROM grade";
			$result = mysqli_query($link ,$sql);
            // 如何找到result的訊息?
            
			mysqli_close($link);

		?> 
	</BODY>
</HTML>
