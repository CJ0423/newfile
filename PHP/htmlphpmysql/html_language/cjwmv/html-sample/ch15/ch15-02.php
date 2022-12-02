<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>建構子</title>
</head>
<body>

<?php 
//宣告類別
class cart
{
	var $owner;
	var $price=300;	//每套產品的定價
	var $goods;
	function cart($name){
	//建構子
		$this->owner=$name;
		echo "<h2><font color=purple>歡迎進入志凌資訊學習網!</h2>";
		echo $name."建立了cart類別的物件</font><p>";
	}
	function add_item($title, $amt){
	//新增項目到購物車中
		$this->goods[$title] +=$amt;
		//傳回數量
		return $amt;
	}
	function remove_item($title, $amt){
	//由購物車內移除項目
	  if($this->goods[$title]>$amt){
		$this->goods[$title] -=$amt;
		//傳回數量
		return $amt;
	  }else{
	  	echo "錯誤!! $title 移除的量大於該項目既有的量!<br>";
		return false;
	  }
	}
	function get_owner(){
	//傳回購物車擁有者的名稱
		return $this->owner;	
	}
	function get_goods(){
	//傳回購物車中的物件清單
		return $this->goods;
	}
}//end class

$item=0;
//建立一個新物件並指定名稱
  $mycart=new cart("Peter");
  
//新增物品到購物車
  $item += $mycart->add_item("ASP.NET",3);
  $item += $mycart->add_item("Java",2);
  $item += $mycart->add_item("JavaScript",3);
  $item += $mycart->add_item("VB",4);
  $item += $mycart->add_item("ASP",1);
 
//取得購物車的擁有者
 $na=$mycart->get_owner();
 echo $na."<p>";

//取得購物車內的物件清單
 $list=$mycart->get_goods();
 print_r($list)."<p>";

echo "<p>採購總金額 : ".$item * $mycart->price;
?>

</body>
</html>
