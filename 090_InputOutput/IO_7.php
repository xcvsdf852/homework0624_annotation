<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r"); //透過  r表示讀資料
while (!feof($f))  //end of file 判斷是否檔案是否結束了
{
	$line = fgets($f);  //從檔案讀一行，不包跨換行符號
	$sData .= Trim($line) . "<br>";  //
}

//另一種php寫法
// while ($line = fgets($f)) 
// {
// 	$sData .= Trim($line) . "<br>";  //
// }


fclose($f);
echo $sData;

?>
