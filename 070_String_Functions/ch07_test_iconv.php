<?php
  // header("content-type: text/html; charset=utf-8");
  header("content-type: text/html; charset=big5");
  $s = "許功蓋";  //這邊還是UTF-8
  echo strlen($s), ", ";  // 9 告訴字串佔據的記憶體大小不是字數UTF-8
  echo strlen(iconv("UTF-8", "big5", $s)); //iconv 將UTF-8 轉換成big5  大五碼中文是兩個字元
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s); //將字轉換為big5，才能在charset=big5正常顯示
?>
