<?php
$iSum = 0;
$i = 1;
while ($i <= 10)   //當$i 小於等於 10執行
{
	$iSum += $i;  // $iSum = $iSum + $i
	$i += 1;		// $i = $i+1
}
echo $iSum;

echo "<hr>";

$iSum = 0;
$i = 0;
while ($i < 10) //當$i 小於 10執行
{
	$i++;   // $i = $i+1
	$iSum += $i;	// $iSum = $iSum + $i
}
echo $iSum
?>