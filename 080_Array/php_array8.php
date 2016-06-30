<?php

	header("Content-Type:text/html; charset=utf-8");
	$testArray = array("A1", "A2", "A18");
	sort($testArray); //sort排序 從頭開始比 A18 的前面A1 比 A2  小  放置前面
	var_dump($testArray);// array(3) { [0] => string(2) "A1" [1] => string(3) "A18" [2] => string(2) "A2" } 
	
	echo "<br />";
	
	natsort($testArray); //自然排序法 按數值比大小
	var_dump($testArray);//array(3) { [0] => string(2) "A1" [2] => string(2) "A2" [1] => string(3) "A18" }
	
	
	
	echo "<hr>";
	
	
	$temp_files = array("temp15.txt","temp10.txt",
	"temp1.txt","temp22.txt","temp2.txt");
	
	sort($temp_files);
	echo "标准排序：";
	print_r($temp_files);
	echo "<br>";
	
	natsort($temp_files);
	echo "自然排序：";
	print_r($temp_files);
?>
