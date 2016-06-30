<?php

echo MathTool::calcTotal(1, 2, 3, 4, 5);

class MathTool {
	static function calcTotal () {
		$args = func_get_args(); //傳回包含函式的參數列表的陣列
		// var_dump($args);// array(5) { [0] => int(1) [1] => int(2) [2] => int(3) [3] => int(4) [4] => int(5) }
		$total = 0;
		foreach ($args as $value) {
			$total += $value;  //值加總
		}
		return $total;
	}
}

?>
