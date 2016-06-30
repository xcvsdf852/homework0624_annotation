<?php

$a = array('xxx',  //若無指定Key 則自動安排 [0]
'book' => '書籍',
'yyy',//若無指定Key 則自動安排 [1] 不是[2] 因為是分開的
'desk' => '書桌',
'pen' => '筆');

foreach ($a as $k => $s)
{
	 echo "$k = $s<br>";
}

?>