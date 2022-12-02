<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>設定類別存取權限</title>
</head>
<body>
<h2><font color="purple">類別存取權限</font></h2>

<?php 
//宣告類別
class vehicle
{
 //設定不同的存取權限
 public $type;
 protected $model;
 private $color;
 static  $test;
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
}//end class

$Lindacar=new vehicle;
$Lindacar->type="Van";
$Lindacar->set_model("TOYOTA");
$Lindacar->set_color("silver");

//$Lindacar->model="TOYOTA";
//$Lindacar->color="red";

vehicle::$test="測試資料";
//$ttt=vehicle::$test;
echo "Linda的車型是 : ".$Lindacar->getcartype()."<p>";
echo "Linda車的顏色是 : ".$Lindacar->getcolor()."<p>";
echo "Linda車的廠牌是 : ".$Lindacar->getmodel()."<p>";
//echo $ttt;
echo vehicle::$test;
?>
</body>
</html>
