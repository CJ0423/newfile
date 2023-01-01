<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<TITLE>分頁瀏覽</TITLE>
	</HEAD>
	<BODY>
		<H1 ALIGN="CENTER">零組件報價表</H1>
		<?php
			//指定每頁顯示幾筆記錄
			$records_per_page = 7;
			
			//取得要顯示第幾頁的記錄
            // 同時這一段也是按下去決定第幾頁的關鍵
			if (isset($_GET["page"]))
				$page = $_GET["page"];
			else
				$page = 1;
				
		 //建立資料連接
			$link = mysqli_connect("localhost", "root");
			if (!$link) die("建立資料連接失敗");
			
			//開啟資料表
			$db_selected = mysqli_select_db($link,"product" );
			if (!$db_selected) die("開啟資料庫失敗");
		mysqli_query($link,"SET NAMES UTF8");	
			//執行 SQL 命令
			// 這一段是在強調選擇哪些項目，並使否些項目改變成我們要的名字。
			$sql = "SELECT category AS '零組件種類', brand AS '品牌', specification AS 
			        '規格', price AS '價格', date AS '報價日期' FROM Price";		
			$result = mysqli_query($link ,$sql );
			if (!$result) die("執行 SQL 命令失敗");
			
			//取得總共多少欄位數 //5
			$total_fields = mysqli_num_fields($result);
			
			//取得總共有多少記錄數 //40
			$total_records = mysqli_num_rows($result);
			
			//計算總頁數 ceil是無條件進位法
			$total_pages = ceil($total_records / $records_per_page);
			
			//計算本頁第一筆記錄的序號
			// 7*(1-1)=0 因為編號是從0開始每一個頁面顯示7筆
			$started_redcord = $records_per_page * ($page - 1);
			
			//將記錄指標移至本頁第一筆記錄的序號，決定每一頁的第一筆資料是誰，少了這個哪都去不了
			mysqli_data_seek($result, $started_redcord);

			//顯示欄位名稱
			echo "<TABLE BORDER='1' ALIGN='CENTER' WIDTH='800'>";
			echo "<TR ALIGN='CENTER'>";		
				//請告訴我 所有關於這個表格的訊息，接著再在底下透過$meta->name把他請出來， 
			while ( $meta = mysqli_fetch_field($result))  
			{
                //幫我印出meta這個物件中的name
      	                   echo "<TD>" . $meta->name . "</TD>";
                        }
				
			echo "</TR>";
			
	    //顯示記錄
			$j = 1;
			while ($row = mysqli_fetch_row($result) and $j <= $records_per_page)
			{
				echo "<TR>";		
				for($i = 0; $i < $total_fields; $i++)
				{
					echo "<TD>" . $row[$i] . "</TD>";					
				}
				$j++;
				echo "</TR>";		
			}
			echo "</TABLE>" ;
			
			//產生導覽列
			echo "<P ALIGN='center'>";
			if ($page > 1)
				echo "<A HREF='show_record.php?page=". ($page - 1) . "'>上一頁</A> ";
			for ($i = 1; $i <= $total_pages; $i++)
			{
				if ($i == $page)
				  echo "$i ";
			     else
					echo "<A HREF='show_record.php?page=$i'>$i</A> ";				}
			if ($page < $total_pages)
				echo "<A HREF='show_record.php?page=". ($page + 1) . "'>下一頁</A> ";			
			echo "</P>";
						//釋放記憶體空間
			mysqli_free_result($result);
			mysqli_close($link);
		?> 
	</BODY>
</HTML>
