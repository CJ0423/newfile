<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>抽象類別</title>
</head>
<body>
<h2><font color="#CC00FF">抽象類別</font></h2>

<?php 
//宣告抽象類別(類別的原型)
abstract class cart
{//建立購物車類別
  var $owner;
  var $store;
  
  //定義抽象成員函數
  abstract function get_owner($x);
  
} //end abstract class

class store_cart extends cart
{   //繼承自cart類別的商店購物車
	
	//重新定義抽象成員函數
	function get_owner($x)
	{
		//設定商店名稱
		$this->store="大順利網路商店";
		echo "<font color='green'><h3>".$this->store."</h3>";
		echo $x." 客戶您好</font><p>";
	} //end function

} //end store_cart class

class book_cart extends cart
{//繼承自cart類別的書店購物車
	
	//重新定義抽象成員函數
	function get_owner($x)
	{
		//設定商店名稱
		$this->store="私房教師書店";
		echo "<font color='blue'><h3>".$this->store."</h3>";
		echo $x." 客戶您好</font><p>";
	} //end function
} //end book_cart class

//宣告新的物件
  $Linda=new book_cart;
//使用類別內自訂的成員函數
  $Linda->get_owner("廖佐育");

//宣告新的物件
  $Caroline=new store_cart;
//使用類別內自訂的成員函數
  $Caroline->get_owner("江高舉");
?>
</body>
</html>
