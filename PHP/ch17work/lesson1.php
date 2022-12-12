<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<TITLE>建立資料連接</TITLE>
	</HEAD>
	<BODY>
		<?php
        // 這是連結資料庫的方法
		//所有事情都是從這裡開始
			$link = mysqli_connect("localhost", "root");
			if (!$link)
			{
				die("無法建立連接");
			}
			Else
                        {
                          echo "建立連接成功";
                        }
                       		?> 
	</BODY>
</HTML> 
