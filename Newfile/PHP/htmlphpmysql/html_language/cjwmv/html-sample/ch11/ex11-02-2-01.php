<html>
<html>
  <head>
     <title>
       成績系統
     </title>
  </head>
  <body>
    <h1>成績系統</h1>
    <h2>單科</h2>
    請輸入下列項目<br>
    <form method="post" action="ex11-02-2-02.php">
   
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

    人　數:<input type="text" name="nu"><br>
            <input type="submit" name="submit" value="送出">
           <input type="reset" name="reset" value="重填">
</form>

  </body>
</html>