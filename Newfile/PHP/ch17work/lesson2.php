<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<TITLE>開啟資料庫</TITLE>
	</HEAD>
	<BODY>
		<?php
			$link = mysqli_connect("localhost", "sales","123456");
			if (!$link)
			{
				die("無法建立連接<BR><BR>".mysqli_connect_error ());
			}			
			$db_selected = mysqli_select_db($link, "students");  //多了個空格
			if (!$db_selected)
			{
   		 	die ("無法開啟 students 資料庫<BR>" . mysqli_error($link));
			}
            else{
                echo "資料庫開啟成功";
            }
			mysqli_close($link);
		?> 
	</BODY>
</HTML>
