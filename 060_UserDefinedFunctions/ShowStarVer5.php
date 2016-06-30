<?php
function ShowStar($iCount, $sWhat = "*")
{
	if ($iCount <= 0)    //假如小於零時就在此判斷終止
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)//假如超過20時就在此判斷終止
	{
		echo "iCount <= 20 please";
		return;
	}
	
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);
?>