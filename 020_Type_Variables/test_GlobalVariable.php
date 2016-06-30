<?php
$a = 20;
function myfunction($b) {
	// print "a=$a<br>";  //這個在function內尚未宣告
	$a = 30;
	// print "a=$a<br>"; //30
	global $a, $c; //全域變數
	// print "a=$a<br>"; //20 抓外面的20
	return $c = ($b + $a);
}
print myfunction(40) + $c; //120


?>