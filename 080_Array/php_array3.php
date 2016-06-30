<?php

$bloodType = array("A", "B", "AB", "O");//也可以透過Array的涵式
$bloodType[6] = "xy"; //可以新增內容 而 3 則會直接覆蓋 o 資料

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}


?>
