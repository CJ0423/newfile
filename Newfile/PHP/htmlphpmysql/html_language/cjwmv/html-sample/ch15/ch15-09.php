<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>類別相關函數</title>
</head>
<body>
<h2><font color="#CC00FF">類別相關函數</font></h2>

<?php 
//宣告類別
class vehicle
{
 //相關屬性
 var $type;
 var $model;
 var $color;
 
 function set_type($tt){
 //設定交通工具屬性
 	$this->type=$tt;
 }
 
 function set_model($mm){
 //設定車子的廠牌
 	$this->model=$mm;
 }
 
 function set_color($cc){
 //設定車子顏色
 	$this->color=$cc;
 }
 
 function getcartype() {
 //傳回$type屬性
 	return $this->type;
 }
 
 function getmodel(){
 //傳回$model屬性
 	return $this->model;
 }
 
 function getcolor(){
  //傳回$color屬性
 	return $this->color;
 }
}//end vehicle class

//建立物件實體
  $PeterCar=new vehicle;
  
//使用類別相關函數
  $clsname=get_class($PeterCar);
  echo "\$PeterCar物件對應的類別是 : ".$clsname."<p>";

//顯示類別中的所有方法清單  
  $method_array=get_class_methods($clsname);
  echo "$clsname 類別的所有成員函數: <p>";
  print_r($method_array);
  
//顯示類別中的所有屬性清單 
  $property_array=get_class_vars($clsname);
  echo "<p>$clsname 類別的所有成員資料: <p>";
  print_r($property_array);
?>

</body>
</html>
