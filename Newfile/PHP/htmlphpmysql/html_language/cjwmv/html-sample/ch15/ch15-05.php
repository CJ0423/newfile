<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>類別繼承</title>
</head>
<body>
<h2><font color="#CC00CC">類別繼承</font></h2>

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

class car extends vehicle
{//繼承自vehicle 的子類別
  var $wheel;
  function showcar($x,$y,$z)
  {
  	//是四輪的車子
    $this->wheel=4;	
		
	//呼叫父類別的函數
	parent::set_type($x);
	parent::set_model($y);
	parent::set_color($z);
	
	//顯示車子的相關資料
	echo "你車子的類型是 : <font color='blue'> ".$this->type."</font><p>";
	echo "你車子的輪子數是 : <font color='blue'> ".$this->wheel."</font><p>";
	echo "你車子的廠牌是 : <font color='blue'> ".$this->model."</font><p>";
	echo "你車子的顏色是 : <font color='blue'> ".$this->color."</font><p>";
  } //end function
} //end car class

//建立新的 car 物件
$Alicecar=new car;

//使用物件所提供的方法
$Alicecar->showcar("家用房車","Nissan","red");
?>

</body>
</html>
