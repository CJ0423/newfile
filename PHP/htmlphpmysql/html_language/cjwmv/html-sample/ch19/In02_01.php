<html>
  <head>
    <title>頂新資訊</title>
  </head>
  <body>
     <center>
       <h1>頂新資訊公司未休假奬金報表列印系統</h1><br>
       <h2>請輸入下列資料</h2>
       <form method="post" action="ou02_01.php">
          <table border="1">
            <tr><td>年度</td>
                <td>
                   <select name="ye" >
                      <option value="88" >88</option>
                      <option value="89" selected>89</option>
                      <option value="90" >90</option> 
                   </select>
                 </td>
            </tr>
            <tr><td>年度</td>
                <td>
                   <select name="de" >
                      <option value="０;全部" >全部</option>
                      <option value="A;董事長室" >董事長室</option>
                      <option value="B;總經理室" >總經理室</option>
                      <option value="C;研發部門" selected>研發部門</option> 
                      <option value="D;業務部門" >業務部門</option>
                      <option value="E;採購部門" >採購部門</option>
                      <option value="F;維修部門" >維修部門</option>
                      <option value="G;資訊部門" >資訊部門</option>
                      <option value="H;企劃部門" >企劃部門</option>
                      <option value="I;人事部門" >人事部門</option>
                      <option value="J;行政部門" >行政部門</option>
                      <option value="K;會計部門" >會計部門</option>
                      <option value="L;圖書室" >L圖書室</option>
                   </select>

                 </td>
            </tr>                    
          </table><br>
            <input type="submit" value="送出">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="重寫">
       </form>
     </center>
  </body>
</html>
