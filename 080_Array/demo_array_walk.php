<?php
$result = '';
function glue ($val)
{
	global $result;
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd');
array_walk ($array, 'glue');
//根據陣列的每一個值 做一次fuction裡面的邏輯動作
echo $result;
?>