<?php 
function average($a,$b)
{
//先判斷輸入的資料是否是數值
  if(is_numeric($a) && is_numeric($b)){
	$avg=($a+$b)/2;
	//傳回平均值
	return $avg;
  }else{
  	return "<font color='red'>所輸入的資料非數值 !</font>";
  }
}

function sum($a,$b)
{
//先判斷輸入的資料是否是數值
  if(is_numeric($a) && is_numeric($b)){
	$total=$a+$b;
	//傳回總計
	return $total;
  }else{
  	return "<font color='red'>所輸入的資料非數值 !</font>";
  }
}
?>
