<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{ text-align: center;}
        .a02 {float:left;width:150pt;height:270pt;margin:5pt;background-color:pink;}
    </style>
</head>
<body>
    <form>
    <table style="display:flex;justify-content:center;">
        <tr style="width:100% ;height:90%">
            <td><h1>卡比商城</h1></td></tr><tr><td ><div style="width:100%;display:flex;flex-wrap: wrap; ">
    <?php




    // 商品代號 商品名稱 商品圖片 商品價格 品牌 按下送出時表格的名字 
$data=array(0=>array("purses01","卡比商品1","(1).jpg","10","good牌","purses01"),
    1=>array("purses02","卡比商品2","(2).jpg","10","good牌","purses02"),
    2=>array("purses03","卡比商品3","(3).jpg","10","good牌","purses03"),
    3=>array("purses04","卡比商品4","(4).jpg","10","good牌","purses04"),
    4=>array("purses05","卡比商品5","(5).jpg","10","good牌","purses05"),
    5=>array("purses06","卡比商品6","(6).jpg","10","good牌","purses06"),
    6=>array("purses07","卡比商品7","(7).jpg","10","good牌","purses07"),
    7=>array("purses08","卡比商品8","(8).jpg","10","good牌","purses08"),
    8=>array("purses09","卡比商品9","(9).jpg","10","good牌","purses09"),
    9=>array("purses10","卡比商品10","(10).jpg","10","good牌","purses10"),
   
);
for($x=0;$x<=count($data)-1;$x++){
    echo'<table class="a02">';
    echo '<tr><td>'.$data[$x][0].'<td></tr>'; //商品編號
    echo '<tr><td>'.$data[$x][1].'<td></tr>'; //商品名稱
    echo '<tr><td><img  src="'.$data[$x][2].'" style="width:240px;height:130px"><td></tr>'; //商品圖片
    echo '<tr><td>價格:'.$data[$x][3].'<td></tr>'; //商品價格
    echo '<tr><td>品牌:'.$data[$x][4].'<td></tr>'; //商品品牌
    echo '<tr><td>購買<input size=3; type="text"name="'.$data[$x][5].'">個</td></tr>'; //商品編號



    echo'</table>';
}




    ?></div></td></tr></table>
    <div style="display:flex;justify-content:center"><input   type="submit"></div></form>
</body>
</html>