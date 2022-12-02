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
    <CENTER><IMG SRC="fig1.jpg"></CENTER>
		<?php	
			//取得要顯示之記錄
			$id = $_GET["id"];
				
		 //建立資料連接
			$link = mysqli_connect("localhost", "root");
			if (!$link) die("建立資料連接失敗");
			
			//開啟資料表
			$db_selected = mysqli_select_db($link , "news" );
			if (!$db_selected) die("開啟資料庫失敗");

		 mysqli_query($link,"SET NAMES UTF8");
			//執行 SQL 命令
			$sql = "SELECT * FROM message WHERE id = $id";	
			$result = mysqli_query($link, $sql);
			if (!$result) die("執行 SQL 命令失敗");
				
			echo "<TABLE WIDTH='800' ALIGN='CENTER' CELLPADDING='3'>";
			echo "<TR HEIGHT='40'><TD COLSPAN='2' ALIGN='center'
			       BGCOLOR='#663333'><FONT COLOR='white'>
						 <B>討論主題</B></FONT></TD></TR>";	 
						  
	    //顯示原討論主題的內容
			while ($row = mysqli_fetch_assoc($result))
			{
  			echo "<TR>";
    		echo "<TD BGCOLOR='#CCFFCC'>主題：" . $row["subject"] . "　";
     		echo "作者：" . $row["author"] . "　";
     		echo "時間：" . $row["date"] . "</TD></TR>";				
  		  echo "<TR HEIGHT='40'><TD BGCOLOR='CCFFFF'>";
				echo $row["content"] . "</TD></TR>";
			}
			
			echo "</TABLE>";		
			
			//釋放 $result 佔用的記憶體空間
			mysqli_free_result($result);
           
                        
			
			//執行 SQL 命令
			$sql = "SELECT * FROM reply_message WHERE reply_id = $id";	
			$result = mysqli_query($link, $sql );
			if (!$result) die("執行 SQL 命令失敗");
			
			if (mysqli_num_rows($result) <> 0)
			{
				echo "<HR>";
				echo "<TABLE WIDTH='800' ALIGN='CENTER' CELLPADDING='3'>";
				echo "<TR HEIGHT='40'><TD COLSPAN='2' ALIGN='center'
				       BGCOLOR='#99CCFF'><FONT COLOR='#FF3366'>
							 <B>回覆主題</B></FONT></TD></TR>";
							 
	    	//顯示回覆主題的內容
				while ($row = mysqli_fetch_assoc($result))
				{
  				echo "<TR>";
    			echo "<TD BGCOLOR='#FFFF99'>主題：" . $row["subject"] . "　";
     			echo "作者：" . $row["author"] . "　";
     			echo "時間：" . $row["date"] . "</TD></TR>";				
  		  	echo "<TR><TD BGCOLOR='CCFFFF'>";
					echo $row["content"] . "</TD></TR>";
				}
				
				echo "</TABLE>";			
			}

			//釋放記憶體空間
			mysqli_free_result($result);				
			mysqli_close($link);					
		?>
	<HR>
    <FORM NAME="myForm" METHOD="post" ACTION="post_reply.php">
      <INPUT TYPE="hidden" NAME="reply_id" VALUE="<?= $id ?>">
      <TABLE BORDER="0" WIDTH="800" ALIGN="center" CELLSPACING="0">
        <TR HEIGHT="40" BGCOLOR="#0084CA" ALIGN="center" VALIGN="middle">
          <TD COLSPAN="2"><FONT COLOR="white">請在此輸入您的回覆</FONT></TD>
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
          <INPUT TYPE="button" VALUE="回覆討論" onClick="check_data()">   
          <INPUT TYPE="reset" VALUE="重新輸入"></TD>
        </TR>  
      </TABLE>                   
    </FORM>
  </BODY>                                                                                 
</HTML>
