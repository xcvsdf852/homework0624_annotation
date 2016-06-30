<?php

$a = array('1', '2');
foreach ($a as $k => $x)
{
	// $x = '3';    //這邊並不會改變值
	$a[$k] = '3';		//若要改變資料，則用此方法
}

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>