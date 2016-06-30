<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); //英文部分是 Key

// echo "每年的四季分別為：<br>";
// foreach ($season as $key => $value){ //把陣列的每一項逐一帶入 Key 與 Value裡面
// 	echo $key, "=>", $value, "<br>";
// }

//若只要值的話$season as $value

while (list($key, $value) = each($season)) {
    	echo $key, "=>", $value, "<br>";
}

?>