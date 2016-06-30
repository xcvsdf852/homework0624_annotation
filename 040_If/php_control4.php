<?php
	header("content-type: text/html; charset=utf-8");
	$num = 3; //$num 變數為3
	switch ($num){   //根據()輸入的數值 跑到該數值的 case 執行
		case 0:
			echo "零";
			break;
		case 1:
			echo "壹";
			break;
		case 2:
			echo "貳";
			break;
		case 3:
			echo "參";
			break;
		case 4:
			echo "肆";
			break;
		case 5:
			echo "伍";
			break;
		case 6:
			echo "陸";
			break;
		case 7:
			echo "柒";
			break;
		case 8:
			echo "捌";
			break;
		case 9:
			echo "玖";
			break;
		default:   //若超過0-9的數值責執行這段
			echo "unknown";
	}  // end of switch
	
	
	//將數字轉換為國字，3則轉換為 參
?>