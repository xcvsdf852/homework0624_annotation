<?php
header("Content-Type:text/html; charset=utf-8");
function ShowStar($iCount)
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= "*";
	}
	echo $result;
}

function checkNum($num){
	
	if(is_int($num) & $num > 0 ){  //is_int：只有整數類型判斷為true，所以"123"為FALSE，特別注意 字串過不去
		//is_numberic只要是數字構成，都判斷為true
		return true;						   
		// ShowStar($num);
	}else{
		
		echo "請輸入正整數";
		return false;						   
	}

}

$iHowMany = 10; 
// ShowStar($iHowMany);
while(checkNum($iHowMany)){
	 ShowStar($iHowMany);
	 break;
}



?>