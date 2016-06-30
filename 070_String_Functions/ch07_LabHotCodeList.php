<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);//計算字元長度
//echo $iLen."<br>";//30
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1); //部分字串內容$sData要擷取的字串，$iPos開始擷取的位置，1是字串長度
	$result = $ch . str_replace($ch, "", $result);//查找$result字料是否有與$ch相同的，若有則取代成空白
	echo $result."<br>";
}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
//將最後的結果6178520943拆分61785-20943 分成前面五個後面五個數值
?>