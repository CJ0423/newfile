<?php 
function ddcheck($m,$d,$y)
{
//判斷所輸入的資料是否是合法的日期資料
	if(checkdate($m,$d,$y)){
		//將輸入的資料轉成UNIX時間戳記
		$dd=mktime(0,0,0,$m,$d,$y);
		//以date()函數顯示對應格式
		echo date("M-d-Y",$dd);
	}else{
		echo "所輸入的資料不是合法的日期格式!";
	}
}

?>
