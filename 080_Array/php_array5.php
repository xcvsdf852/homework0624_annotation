<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：";
foreach ($season as $value){  //將$season陣列每一個值逐一取出來
	echo $value;
}

?>