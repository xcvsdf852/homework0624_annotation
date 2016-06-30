<?php
 $a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
		global $a, $c;
	$a = 30;
	//echo "a = $a<br>";

	//echo "a = $a<br>";
	return $c = ($b + $a);
}
// 請預測答案是多少?
echo myFunction(40) + $c;


// var_dump($_GLOBALS);
echo "<hr>";

$g = 100;

function g (){
	global $g;
	$g =50;
	 global $gg;
	 $gg= 99;
	echo $g."<br>";
}


function gg(){
	global $g;
	echo $g."<br>";
	
}
//1.
// gg();//50
// g();//100


//2.
g();//50
gg();//50
?>