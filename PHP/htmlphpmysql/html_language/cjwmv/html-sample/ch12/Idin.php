<html>
  <head>
    <title>身分證驗證程式</title>
    <script language="javascript">
       function check_data()
       {
         if(document.idForm.idnu.value.length <= 9)
         {
            alert("身分證字號長度含英文字軌要10碼");
            return false;
         }
         if(document.idForm.idnu.value.length >= 11)
         {
            alert("身分證字號長度含英文字軌要10碼");
            return false;
         }
       idForm.submit();
       }
    </script>
  </head>
  <body>
    <h1>身分證驗證程式</h1>
    請在欄內輸入身分證字號<br>
    <form name="idForm" method="post" action="idche.php">
     身分證字號:
     <input type="text" name="idnu" size="12"><br><br>
     <input type="button" VALUE="送出" onClick="check_data()">&nbsp;&nbsp;&nbsp;
     <INPUT TYPE="reset" VALUE="重新輸入">
     
    </form>
  </body>
</html>
