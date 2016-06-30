<?php
$content = <<<fileContent
PHP基本語法重點整理、
自訂函式寫作注意事項、
陣列與相關函式、
字串與相關函式、
物件導向程式設計、
狀態資訊管理、
XML/JSON資料處理、
PHP資料庫程式設計、
檔案系統與資料讀寫、
串流與網路程式設計、
程式安全與攻防實例、
Web Services、
PHP與jQuery、
jQuery Mobile整合運用
fileContent;
//位置必須在第一格

$fileSize = file_put_contents("data2.txt", $content); //將檔案 put 出去
echo "File size: $fileSize <br />-- Done --";


//file_put_contents与依次调用 fopen()，fwrite() 以及 fclose() 功能一样。
?>