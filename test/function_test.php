<?php

function showStar($howMany, $what = "*"){
    $result ="";
    for($i = 1; $i <= $howMany; $i++){
        $result .= $what;
    }
    echo $result;
    
}
$a = rand(0,20);
showStar($a ,"$");

?>