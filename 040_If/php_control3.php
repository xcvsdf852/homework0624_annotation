<?php
	$score = 95;
	if ($score >=60 && $score < 70) {
		echo 'D';
	} elseif ($score>=70 && $score<80) {
		echo 'C';
	} elseif ($score>=80 && $score<90) {
		echo 'B';		
	} elseif ($score>=90 && $score<=100) {
		echo 'A';		
	} else {
		echo 'Fail';
	}
	
	
	//分數判斷分數大於60 且 小於70 屬於D
	//分數判斷分數大於70 且 小於80 屬於C
	//分數判斷分數大於80 且 小於90 屬於B
	//分數判斷分數大於90 且 小於等於100 屬於A
	//其他的Fail


?>