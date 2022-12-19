<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<TITLE>開啟資料庫</TITLE>
	</HEAD>
	<BODY>
		<?php
		//選擇連線相關內容
			$link=mysqli_connect("localhost","sales",123456);
			//開啟資料庫中的class
			$db_selected=mysqli_select_db($link,"class");
			if(!$db_selected){		
						//理論上應該是回傳說錯誤的內容，但是卻沒有反應 
				exit("失敗".mysqli_error($link));
			}
			else{echo "成功";}
		?> 
	</BODY>
</HTML>
