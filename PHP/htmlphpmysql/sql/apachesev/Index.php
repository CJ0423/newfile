<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=big5">
		<TITLE>娛樂討論區</TITLE>
		<SCRIPT LANGUAGE="JAVASCRIPT">
			function check_data()
			{
				if (document.myForm.author.value.length == 0)
				{
					alert("作者欄位不可以空白哦！");
					return false;
				}
				if (document.myForm.subject.value.length == 0)
				{
					alert("主題欄位不可以空白哦！");
					return false;
				}
				if (document.myForm.content.value.length == 0)
				{
					alert("內容欄位不可以空白哦！");
					return false;
				}				
				myForm.submit();
			}
		</SCRIPT>		
	</HEAD>
  <BODY>
    <P ALIGN="center"><IMG SRC="fig.jpg"></P>
		<?php
			//指定每頁顯示幾筆記錄
			$records_per_page = 5;
			
			//取得要顯示第幾頁的記錄
			if (isset($_GET["page"]))
				$page = $_GET["page"];
			else
				$page = 1;
				
		 //建立資料連接
			$link = mysql_connect("localhost", "root", "123456");
			if (!$link) die("建立資料連接失敗");
			
			//開啟資料表
			$db_selected = mysql_select_db("news", $link);
			if (!$db_selected) die("開啟資料庫失敗");

mysql_query("SET NAMES UTF8");			
			//執行 SQL 命令
			$sql = "SELECT id, author, subject, date FROM message ORDER BY date DESC";		
			$result = mysql_query($sql, $link);
			if (!$result) die("執行 SQL 命令失敗");
				
			//取得記錄數
			$total_records = mysql_num_rows($result);
			
			//計算總頁數
			$total_pages = ceil($total_records / $records_per_page);
			
			//計算本頁第一筆記錄的序號
			$started_record = $records_per_page * ($page - 1);
			
			//將記錄指標移至本頁第一筆記錄的序號
			mysql_data_seek($result, $started_record);

			echo "<TABLE WIDTH='800' ALIGN='center' CELLSPACING='3'>";
			
			//使用 $bg 陣列來儲存表格背景色彩
			$bg[0] = "#D9D9FF";
			$bg[1] = "#FFCAEE";
			$bg[2] = "#FFFFCC";
			$bg[3] = "#B9EEB9";
			$bg[4] = "#B9E9FF";					
	  
	    //顯示記錄
			$j = 1;
			while ($row = mysql_fetch_assoc($result) and $j <= $records_per_page)
			{
  			echo "<TR>";
    		echo "<TD WIDTH='120' ALIGN='center'><IMG SRC='" . mt_rand(0, 9) . ".gif'></TD>";
    		echo "<TD BGCOLOR='" . $bg[$j - 1] . "'>作者：" . $row["author"] . "<BR>";
     		echo "主題：" . $row["subject"] . "<BR>";
     		echo "時間：" . $row["date"] . "<HR>";
				echo "<A HREF='show_news.php?id=";
				echo $row["id"] . "'>閱讀與加入討論</A></TD></TR>";				
				$j++;
			}
			echo "</TABLE>" ;
			
			//產生導覽列
			echo "<P ALIGN='center'>";
			
			if ($page > 1)
				echo "<A HREF='index.php?page=". ($page - 1) . "'>上一頁</A> ";
				
			for ($i = 1; $i <= $total_pages; $i++)
			{
				if ($i == $page)
				  echo "$i ";
				else
					echo "<A HREF='index.php?page=$i'>$i</A> ";		
			}
			
			if ($page < $total_pages)
				echo "<A HREF='index.php?page=". ($page + 1) . "'>下一頁</A> ";			
				
			echo "</P>";
			
			//釋放記憶體空間
			mysql_free_result($result);
			mysql_close($link);
		?> 		
    <HR>
    <!- 顯示輸入新留言表單 -->
    <FORM NAME="myForm" METHOD="post" ACTION="post.php">
      <TABLE BORDER="0" WIDTH="800" ALIGN="center" CELLSPACING="0">
        <TR HEIGHT="40" BGCOLOR="#0084CA" ALIGN="center" VALIGN="middle">
          <TD COLSPAN="2"><FONT COLOR="white">請在此輸入新的討論</FONT></TD>
        </TR>
        <TR HEIGHT="40" BGCOLOR="#D9F2FF" ALIGN="center" VALIGN="middle">
          <TD WIDTH="15%">作者</TD>
          <TD WIDTH="85%"><INPUT NAME="author" TYPE="text" SIZE="50"></TD>
        </TR>
        <TR HEIGHT="40" BGCOLOR="#84D7FF" ALIGN="center" VALIGN="middle">
          <TD WIDTH="15%">主題</TD>
          <TD WIDTH="85%"><INPUT NAME="subject" TYPE="text" SIZE="50"></TD>
        </TR>
        <TR HEIGHT="250" BGCOLOR="#D9F2FF" ALIGN="center" VALIGN="middle">
          <TD WIDTH="15%">內容</TD>
          <TD WIDTH="85%"><TEXTAREA NAME="content" COLS="50" ROWS="10"></TEXTAREA></TD>
        </TR>
        <TR>
          <TD COLSPAN="2" HEIGHT="40" ALIGN="center" VALIGN="middle">
          <INPUT TYPE="button" VALUE="張貼討論" onClick="check_data()">　
          <INPUT TYPE="reset" VALUE="重新輸入"></TD>  
        </TR>
      </TABLE>   
    </FORM> 
  </BODY>
</HTML>
