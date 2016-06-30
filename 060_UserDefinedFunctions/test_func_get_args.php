<?php

echo calcTotal(1, 2, 3, 4, 5);

function calcTotal () {
	$args = func_get_args(); //傳回包含函式的參數列表的陣列
	// var_dump($args);
	$total = 0;
	foreach ($args as $value) {
		$total += $value;  //將所有值相加15
	}
	return $total;
}


?>
