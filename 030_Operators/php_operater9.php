<?php

$x = 100;
$y = &$x; //找出X的記憶體指標

//把X值位置 交給 Y ，Y參考 X ， 所以改變Y就是改變X

$y = 200;
echo "x = $x </br>";

unset($x); //把$x 記憶體釋放，會將值抄給y，y就會取代x的值
echo "y = $y </br>";

echo "<hr>";




function point(&$x){
    
    $x += 1000;
    
    return $x;
}


function nopoint($x){
    
    $x += 1000;
    
    return $x;
}

echo nopoint($y);
echo "<br>";
echo $y;
echo "<br>";
echo point($y); //因為Y的位置參照 傳給function的變數，所以是針對Y位置修改
echo "<br>";
echo $y;
?>