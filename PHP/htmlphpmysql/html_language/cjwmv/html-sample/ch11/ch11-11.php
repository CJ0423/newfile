<?php 
$class=array("score" => array(70,95,70,60,88,78,95,88,92,100),
          "name" => array("Alice","Peter","Elvin","Sindy","Simon",
					"Bob","Hank","Charles","Caroline","Linda"));
//將索引值改成大寫英文字母
$class_new=array_change_key_case($class, CASE_UPPER); 
//使用print_r函數以「array設定格式」的模式列印
print_r($class_new);
?>
