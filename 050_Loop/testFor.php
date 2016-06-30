<?php

for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= 4; $j++) {
		echo "$i , $j <br>";
		if (($i + $j) % 4 == 0) //餘0就是整除，一個break 只有跳一層
		    break;
	}
	echo "-----<br>";
}

echo "<hr>";

for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= 4; $j++) {
		echo "$i , $j <br>";
		if (($i + $j) % 4 == 0) //餘0就是整除，
		    continue 2;  //continue 跳二層
	}
	echo "-----<br>";
}

echo "<hr>";

for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= 4; $j++) {
		echo "$i , $j <br>";
		if (($i + $j) % 4 == 0) //餘0就是整除，
		    break 2; //跳出兩層迴圈
	}
	echo "-----<br>";
}



?>