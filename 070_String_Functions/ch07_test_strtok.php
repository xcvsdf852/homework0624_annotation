<?php
$showStr = "Genius is|one/percent inspiration and ninety-nine percent perspiration.";
$s = strtok($showStr, " ");//strtok 函式用來將字串切割成更小的字串
while ($s != "")
{
   echo $s. "*" . "<br>";
   $s = strtok(" .|/");//要切割的符號
   
   
   // 如果這麼寫，程式會沒完沒了...
   // $s = strtok($showStr, " ");
}

//不過 strtok 有個特色是處理同一個字串時，僅需在第一次調用該字串，往後的每次切割都不需要再調用字串，除非要處理新的字串。
// Genius*
// is*
// one*
// percent*
// inspiration*
// and*
// ninety-nine*
// percent*
// perspiration*
?>