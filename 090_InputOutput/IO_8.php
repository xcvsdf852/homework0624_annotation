<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData); //根據換行符號，分解陣列
$f = fopen("data2.txt", "w");// 寫文字檔  a附加寫模式
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);
}
fclose($f);
echo "-- Done --"

?>
