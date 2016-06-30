<?php
	header("content-type: text/html; charset=utf-8");
	$contents = file_get_contents('data.txt'); // 得到的是字串 grt 讀進來
	echo (str_replace("\r\n", "<br />", $contents));
	
	//和 file() 一样，不同的是 file_get_contents() 把文件读入一个字符串。
?>