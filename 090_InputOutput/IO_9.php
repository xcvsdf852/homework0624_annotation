<?php
header("Content-Type: image/png");//跟瀏覽器說這是什麼類型的資料
// MIME Type 搜尋
$filename = "cc.png";
$fileHandle = fopen($filename, "rb");
echo fread($fileHandle, filesize($filename));//fread 不會干涉檔案內容
fclose($filename);

?>