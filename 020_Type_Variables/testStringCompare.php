<?php
//字串比較
$x = "ABC";
$y = "AB";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";
//ABC >= AB
echo "<hr>";


$x = "ABC";
$y = "BA";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";
//B大於A 就不用比了 
//ABC < BA
echo "<hr>";


$x = "123";
$y = "12";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

$x = "123";
$y = "21";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";
//字串是數字時就是用數字比
echo "<hr>";



//strcmp() 函数比较两个字符串。二进制安全字符串比较
// 0 - 如果两个字符串相等
// <0 - 如果 string1 小于 string2
// >0 - 如果 string1 大于 string2

echo strcmp("Hello","Hello");
echo "<br>";
echo strcmp("Hello","hELLo");
echo "<br>";
echo strcmp("Hello world!","Hello world!"); // 两字符串相等
echo "<br>";
echo strcmp("Hello world!","Hello"); // string1 大于 string2
echo "<br>";
echo strcmp("Hello world!","Hello world! Hello!"); // string1 小于 string2

// 0
// -32
// 0
// 7
// -7
		
?>