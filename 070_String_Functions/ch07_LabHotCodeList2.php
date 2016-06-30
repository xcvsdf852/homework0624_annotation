<?php
$f = fopen("pick3.txt", "r");  //打開檔案 只讀
while (!feof($f))  //函數檢測文件是否已經讀至文件末尾
{
	$line = fgets($f);//函數從文件指針中讀取一行
	echo "$line<br>";
}
fclose($f);  //關閉文件
echo "--End--";
?>