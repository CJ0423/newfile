<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<TITLE>顯示所有記錄</TITLE>
	</HEAD>
	<BODY>
	<H1 ALIGN="CENTER">女學生資料表</H1>
		<?php
        // 建立資料連結
			$link = mysqli_connect("localhost", "root"); 
            // 開啟class資料表
			$db_selected = mysqli_select_db( $link,"class");
            // 和資料庫要求相關資料 選取連結的資料庫 使用utf8
mysqli_query($link,"SET NAMES UTF8");

            // 讓Sq1 選擇全部資料 來自 student 條件為F(類別)標籤下屬於女生的的
			$sql = "SELECT * FROM student WHERE csex = 'F'";
            // 印出結果 result的資料太大因此無法印出
			$result = mysqli_query($link,$sql );
			// 印出表格
			echo "<TABLE BORDER='1' ALIGN='CENTER'><TR ALIGN='CENTER'>";

            // 取得資料總長度
			for ($i = 0; $i < mysqli_num_fields($result); $i++)
			{ // 這一段的目標是什麼?抓取欄位
				$meta = mysqli_fetch_field($result);
                // 這邊的這個name指的是欄位的名字 例如no category brand等等
				echo "<TD>" . $meta->name . "</TD>";					
			}
			echo "</TR>";
                        // 下面這一段則是印出列的部分
			while ($row = mysqli_fetch_row($result))
			{               
				echo "<TR>";			   
                 //取得資料長度
				for($i = 0; $i < mysqli_num_fields($result); $i++)
				{
					echo "<TD>" . $row[$i] . "</TD>";					
				}
				echo "</TR>";				
			}
			echo "</TABLE>" ;
            // 釋放所有結果
			mysqli_free_result($result); 
            // 結束
			mysqli_close($link);
		?> 
	</BODY>
</HTML>
