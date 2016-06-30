<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );  //輸入檔案名稱，帶出檔案的陣列
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n"; 
		 // < 或 > 會被瀏覽器誤會為html符號html，所以需要處理轉換
}

?> 