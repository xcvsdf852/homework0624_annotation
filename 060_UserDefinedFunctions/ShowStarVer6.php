<?php

function ShowStar() {
	$args = func_get_args();//傳回包含函式的參數列表的陣列
	
	if (!isset($args[0]))  //判斷是否有設定
		$args[0] = 5;     //若無設定則指定5
	if (!isset($args[1]))//判斷是否有設定
		$args[1] = "*";//若無設定則指定*
	ShowStar_all($args[0], $args[1]);
}

function ShowStar_all($iCount, $sWhat = "*")
{
	if ($iCount <= 0)//假如小於零時就在此判斷終止
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

// ShowStar(2, "^");
// ShowStar(null, "$");
ShowStar();
?>