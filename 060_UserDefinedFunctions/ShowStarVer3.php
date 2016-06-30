<?php
function ShowStar($iCount, $sWhat = "*") //若沒有輸入要顯示的符號，則預設*字號
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);  //可以輸入顯示* 字號數量，也可以輸入要顯示的符號
?>