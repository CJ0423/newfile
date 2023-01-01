<html>
<html>
  <head>
     <title>
       成績系統
     </title>
  </head>
  <body>
    <h1>成績系統</h1>
    請輸入下列項目<br>
    <form method="post" action="session-gradeB.php">
   
     系科:<select name="dept">
            <option value="資訊管理A" selected>資訊管理</option>
            <option value="幼兒B" >幼兒</option>
            <option value="化妝品C" >化妝品</option>
          </select><br>
     <select name="grade">
            <option value="一A" selected>一</option>
            <option value="二B" >二</option>
            <option value="三c" >三</option>
          </select>年:
    <select name="class">
            <option value="甲a" selected>甲</option>
            <option value="乙b" >乙</option>
            <option value="丙c" >丙</option>
          </select>班<br>
    科目數:<input type="text" name="counu"><br>
    人　數:<input type="text" name="nu"><br>
            <input type="submit" name="submit" value="送出">
           <input type="reset" name="reset" value="重填">
</form>

  </body>
</html>