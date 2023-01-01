<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>介面</title>
</head>
<body>
<h2><font color="#CC00FF">介面</font></h2>

<?php 
//宣告介面(類別的原型,不含任何屬性定義)
interface itemtotal
{	
	//宣告介面成員函數
	function item_total($x);
}

//宣告另一個介面
interface owner
{
	//宣告介面成員函數
	function get_owner($x);
}

//cart類別引用itemtotal和owner介面
class cart implements itemtotal,owner
{
  //宣告自已的成員資料
  var $owner;
  var $store;
  var $item=0;
  
  //自訂自己的成員函數
  function get_store()
  {
    //指定商店的名稱
  	$this->store="私房教師數位學習網";
	return $this->store;
  }
  
  //重新定義介面的item_total()函數
  function item_total($x)
  {
	//將購買項目加總到原有的$item屬性
	$this->item +=$x;
	
	//傳回$item屬性值
	return $this->item;		
  } //end function

  //重新定義介面的get_owner()函數
  function get_owner($x)
  {
  	$this->owner=$x;
	//傳回owner屬性值
	return $this->owner;
  }
} //end class

//建立新的物件
$Elearning=new cart;
echo "這家網路商店的名稱 : <font color='blue'>".$Elearning->get_store()."</font><p>";
echo "目前購物車的車主是 : <font color='blue'>".$Elearning->get_owner("Elvin")."</font><p>";

$total=$Elearning->item_total(100);
echo "加買100項後<br/>";
echo "目前購買的數量是 : <font color='blue'>".$total."</font><p>";

$total=$Elearning->item_total(5);
echo "加買5項後<br/>";
echo "目前購買的數量是 : <font color='blue'>".$total."</font><p>";

?>

</body>
</html>
