<?php
function ShowStar($iCount, $sWhat = "*")
{
	if ($iCount > 0)   //輸入數值要大於零
	{  
		if ($iCount <= 20)  //且輸入的數值要小於等於20
		{
			$result = "";
			for ($i = 1; $i <= $iCount; $i++)
			{
				$result .= $sWhat;
			}
			echo $result;  //執行成功還傳結果
		}
		else 
			echo "iCount <= 20 please."; //假如超過20的提醒
	}
	else
	{
		echo "iCount > 0 please.";   //假如小於零時的提醒
	}
}

$iHowMany = 21;
ShowStar($iHowMany);
?>