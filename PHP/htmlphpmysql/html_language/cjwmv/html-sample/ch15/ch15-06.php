<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>多形性的應用</title>
</head>
<body>
<h2><font color="#CC00FF">多形性的應用</font></h2>

<?php 
//宣告類別
class cart
{//建立購物車類別
  var $owner;
  var $store;
  
  function get_owner($x)
  {
  	$this->owner=$x;
	return $his->owner;
  } //end function
  
} //end cart class

class store_cart extends cart
{//繼承自cart類別的商店購物車
	
	function get_owner($x)
	{
		//設定商店名稱
		$this->store="大家發商店";
		echo "<font color='green'>歡迎光臨  <i>".$this->store."</i><p>";
		echo $x." 客戶您好</font><p>";
	} //end function

} //end store_cart class

class book_cart extends cart
{//繼承自cart類別的書店購物車

	function get_owner($x)
	{
		//設定商店名稱
		$this->store="志凌書店";
		echo "<font color='blue'>歡迎光臨 <i>".$this->store."</i><p>";
		echo $x." 客戶您好</font><p>";
	} //end function
} //end book_cart class

//宣告新的物件
  $Linda=new book_cart;
//使用類別內自訂的成員函數
  $Linda->get_owner("林錦雀");

//宣告新的物件
  $Caroline=new store_cart;
//使用類別內自訂的成員函數
  $Caroline->get_owner("羅微娟");

?>

</body>
</html>
