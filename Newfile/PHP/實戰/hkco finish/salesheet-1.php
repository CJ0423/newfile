<?php
////////// 接收傳送資料  ///////////////
$ship=$_POST["ship"];

//////////////////  連結資料庫系統  並 指定資料庫  //////////////////////////////
                 
   $link = mysqli_connect("localhost", "root");     //連結MYSQL資料庫系統
                 
   $db_selected = mysqli_select_db($link, "hkco");  //開啟hkco資料庫

   mysqli_query($link,"SET NAMES UTF8");

///////////  取得銷售確認日期資料  ///////////////////////////////////////////////
   $ortime=localtime(time(),true);
  // $tim=($ortime["tm_year"]+1900)."-".($ortime["tm_mon"]+1)."-".$ortime["tm_mday"];
    $tim[0]=$ortime["tm_year"]-11;  //民國年
    $tim[1]=$ortime["tm_mon"]+1;      //月
    $tim[2]=$ortime["tm_mday"];  //日

//////////////////  從訂購資料表刪除資料 並將資料轉入銷售資料表  //////////////////////////////
for($x=0;$x<count($ship);$x++)
{
echo $ship[$x]."<br>";
        //進行資料分拆
    $data=explode(",",$ship[$x]);  //0:訂單編號,1:客戶帳號,2:產品編號,3:數量
                                   //4:單價,5:訂購時間
    //新增銷售記錄
      $sql = "INSERT INTO `salesheet` (客戶帳號,產品編號,數量,單價,訂購時間,銷售年,銷售月,銷售日) Value('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$tim[0]','$tim[1]','$tim[2]') ";
      $result3 = mysqli_query($link, $sql); 

    //刪除訂購單記錄
           $sql="DELETE from ordersheet where 訂單編號 = '$data[0]'";
           $result = mysqli_query($link, $sql);

 
 
}   
echo "作業已完成";

?>