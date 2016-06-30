<?php

function DrawLine() {
	echo "<hr>";
}

register_tick_function("DrawLine"); //指定 declare 要參照的function

declare (ticks = 3) { //ticks指定在第幾次時執行function
	echo "1<br>";	//因此執行三次語句後，會執行一次function
	echo "2<br>";
	echo "3<br>";
	echo "4<br>";
	echo "5<br>";
	echo "6<br>";
	echo "7<br>";
	echo "8<br>";
	echo "9<br>";
}

/*
declare (ticks = 3) {
	for ($i = 1; $i <= 9; $i++) {
		echo "$i<br>";
	}
}
*/

?>