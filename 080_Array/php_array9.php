<?php
function cmp($a, $b)  
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;  //假若2是永遠最大的  ==2 時就永遠輸出 -1 
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");  //使用者自訂排序法 告訴排序哪個陣列，也要告訴 排序方法
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>