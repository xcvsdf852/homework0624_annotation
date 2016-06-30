<?php

$fileDir = dirname ( __FILE__ ); //查出目前位置與檔名/home/ubuntu/workspace/cyp05/090_InputOutput
$fileResource = opendir ( $fileDir );  //根據路徑開取檔案
//$fileResource 資源代號
echo $fileDir;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : ?>
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); ?>
</body>
</html>
