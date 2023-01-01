<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>物件與類別</title>
</head>
<body>

<?php 
//宣告類別使用class才能宣告
class cart
{
	var $owner;
	var $price=300;	//每套產品的定價
	var $goods;
	function add_item($title, $amt){
	//新增項目到購物車中
		$this->goods[$title] +=$amt;
		//傳回數量
		return $amt;
	}
	function remove_item($title, $amt){
	//由購物車內移除項目
	//陣列的角度去想此處為 $goods[powerpoint]=2  >$amt=1 因此執行
	  if($this->goods[$title]>$amt)
	  {
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
	//此處的this其實指的就是整個cart物件
		return $this->owner;	
	}
	function get_goods(){
	//傳回購物車中的物件清單
		return $this->goods;
	}
}//end class





$item=0;
//建立一個新物件
  $mycart=new cart("name");
//指定購物車名稱
//mycart 其實就是物件
  $mycart->owner="Linda";
//上面這段程式碼，會回傳到上方，並且告訴cart說，owner ＝linda 第12行

  
//新增物品到購物車

//此處將會進入到物件內的第15行程式內
  $item += $mycart->add_item("Access",3);
  $item += $mycart->add_item("Word",2);
  $item += $mycart->add_item("PowerPoint",1);
  $item += $mycart->add_item("VB",4);
  $item += $mycart->add_item("Access",1);

//移除購物出車中的物品
  $item -= $mycart->remove_item("PowerPoint",1);
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
