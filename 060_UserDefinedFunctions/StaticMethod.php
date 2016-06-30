<?php

echo MathTool::calcTotal(1, 2, 3, 4, 5);

class MathTool {
	static function calcTotal () {//Static 是一個修飾子，主要的功用是用來指定變數或函數的類別化。
		$args = func_get_args();
		// var_dump($args);array(5) { [0] => int(1) [1] => int(2) [2] => int(3) [3] => int(4) [4] => int(5) } 
		$total = 0;
		foreach ($args as $value) {
			$total += $value;
		}
		return $total;//15
	}
}
//static就是當程式被執行的時候，php會將被Static
//化的變數和函數存成一個獨立的方法或變數，這個時候你就可以直接使用這一個類變變數和類別函數。 

?>
