<html>
   <head>
      <title>身分證號碼產生器</title>
   </head>
   <body>
     <h1>身分證號碼設定程式</h1>
     <form method="post" action="idcrea.php">
      <table border="2" width="250">
        <tr>
          <td colspan="2" >請選擇下列資料</td>
        <tr>
        <tr>
          <td width="50">縣市</td>
          <td width="200">
  <?php
// $city[ ]陣列用來設定各縣市所對應的縣市資料
    $city=array(10=>"台北市",11=>"台中市",12=>"基隆市",13=>"台南市",14=>"高雄市",15=>"台北縣",16=>"宜蘭縣",17=>"桃園縣",18=>"新竹縣",19=>"苗栗縣",20=>"台中縣",21=>"南投縣",22=>"彰化縣",23=>"雲林縣",24=>"嘉義縣",25=>"台南縣",26=>"高雄縣",27=>"屏東縣",28=>"花蓮縣",29=>"台東縣",30=>"澎湖縣",31=>"陽明山",32=>"金門縣",33=>"連江縣",34=>"嘉義市",35=>"新竹市");

// $cityna[ ]陣列用來設定各縣市的英文字軌
    $cityna=array(10=>"A",11=>"B",12=>"C",13=>"D",14=>"E",15=>"F",16=>"G",17=>"H",18=>"J",19=>"K",20=>"L",21=>"M",22=>"N",23=>"P",24=>"Q",25=>"R",26=>"S",27=>"T",28=>"U",29=>"V",30=>"X",31=>"Y",32=>"W",33=>"Z",34=>"I",35=>"O");
//縣市下拉式表單
    echo "<select name='cityna'>";
      echo "<option value='".$cityna[10]."' selected>".$city[10]."</option>";
    for($i=11;$i<=35;$i++)
    {
      echo "<option value='".$cityna[$i]."' >".$city[$i]."</option>";
    }
    echo "</select>";
  ?>
          </td>
        <tr>
<!--性別資料表單-->
        <tr>
          <td>性別</td>
          <td>
   <select name='sex'>
      <option value='1' selected>男</option>"
   
      <option value='2' >女</option>
  
    </select>      
          </td>
        <tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="送出">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" value="重填">
          </td>
        </tr>
    </table>
   </form>
</body>
</html>
