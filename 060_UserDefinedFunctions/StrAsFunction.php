<?php

function test($i) {    
	return $i + 1;
}

function test100($i) {    
	return $i + 1;
}

// $x = 1;
// echo test($x);

$x = 2;
$p = "test100";  //用一個字串變數存function 的名稱
echo $p($x);  //可以用動態的方式界定變數儲存function名稱並替代使用

?>