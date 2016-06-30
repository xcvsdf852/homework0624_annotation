<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春節', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
    
print_r($season);//Array ( [spring] => 春 [summer] => 夏 [autumn] => 秋 [winter] => 冬 )
echo "<hr>";
var_dump($season);// array(4) { 'spring' => string(3) "春" 'summer' => string(3) "夏" 'autumn' => string(3) "秋" 'winter' => string(3) "冬" }

//var_dumpe更多了陣列裡面的型態  ，一個字元 3byte 春節 就變成string(6)

?>