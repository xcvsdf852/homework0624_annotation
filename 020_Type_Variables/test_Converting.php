<?php

$a = 12;
$b = "34";

$result = $a + $b; // 46
// $result = $a . $b; // 1234
// $result = $a + intval($b);  // 46
//PHP字串 若用 +號運算元，會自段將字串轉為數值後相加
//若是文字或其他不是數字，則是0去相加
//javascript + 符號表示字串 相連 不相加

echo $result;

?>