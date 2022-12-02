<html>
  <head>
     <title>
       成績系統
     </title>
  </head>
  <body>

<?php
      /////        接收帳號資料 並判斷 應執行步驟   ////////////

	ob_start();  //開啟輸出暫存器


        $idname=$_POST["idname"];        //避免狀況五現象
          // $idpass=$_POST["idpas"];

/////////////////////////////////////////////////////////////////////////
//
//       判斷是否為員工 
//
/////////////////////////////////////////////////////////////////////////
// 是

   //指定session_ID
        session_id($idname);

   //啟動session
        session_start();

   //判斷應執行步驟
   if(isset($_SESSION["step"]))
   {
      $step=$_SESSION["step"];     //接收已執行步驟
      if($step=="B")
      {
        header("Refresh:3; URL=se-grades-step-B.php");  
      }
      elseif($step=="C")
      {
        header("Refresh:3; URL=se-grades-step-C.php");  
      }
      else
      {
        header("Refresh:3; URL=se-grades-step-D.php");  
      }   
   }
   else
   {

?>
    <h1>成績系統</h1>
    請輸入下列項目<br>
    <form method="post" action="se-grades-step-B.php">
   
     系科:<select name="dept">
            <option value="資訊管理" selected>資訊管理</option>
            <option value="幼兒" >幼兒</option>
            <option value="化妝品" >化妝品</option>
          </select><br>
     <select name="grade">
            <option value="一" selected>一</option>
            <option value="二" >二</option>
            <option value="三" >三</option>
          </select>年:
    <select name="class">
            <option value="甲" selected>甲</option>
            <option value="乙" >乙</option>
            <option value="丙" >丙</option>
          </select>班<br>
    科目數:<input type="text" name="counu"><br>
    人　數:<input type="text" name="nu"><br>
            <input type="submit" name="submit" value="送出">
           <input type="reset" name="reset" value="重填">
</form>
<?php
   }
?>
  </body>
</html>