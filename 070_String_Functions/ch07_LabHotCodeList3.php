<?php
$sData = "";
$f = fopen("pick3.txt", "r");  //打開文件讀取
while (!feof($f))  //檢查文件是否已經末尾
{
	$line = fgets($f);  //讀取一行檔案
	$sData .= Trim($line);//移除字符串两侧的换行符
}
fclose($f);
// echo $sData;  //908872526535442041985072568716
// exit;
// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);
//echo $iLen."<br>";
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);//部分字串內容$sData要擷取的字串，$iPos開始擷取的位置，1是字串長度
	$result = $ch . str_replace($ch, "", $result);//查找$result字料是否有與$ch相同的，若有則取代成空白

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
//將最後的結果6178520943拆分61785-20943 分成前面五個後面五個數值
?>