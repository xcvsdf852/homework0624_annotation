<?php
if (isset ( $_POST ["btnOK"] )) {
	processFile ( $_FILES ["file1"] );//file1 是$_FILES裡的一個陣列
}
function processFile($objFile) {// 這是個檔案物件，本質也是物件
	if ($objFile ["error"] != 0) {  //檢查是否有錯誤
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	//move_uploaded_file 將檔案搬移
	$test = move_uploaded_file ( $objFile ["tmp_name"],
								"./" . $objFile ["name"] );
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}
	
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />";
	echo "File type: " . $objFile ["type"] . "<br />";
	echo "File size: " . $objFile ["size"] . "<br />";
	
	echo "--  Done --";
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="">
		1. Select a file：<input type="file" name="file1" /><br /> <input
			type="submit" name="btnOK" value="2. 送出資料" />
	</form>
</body>
</html>