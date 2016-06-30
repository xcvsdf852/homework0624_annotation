<?php
  $d = strtotime("2012-09-10"); //字串轉換成時間
  echo $d;
  echo "<br>";
  // echo gettype($d), "<br>";//integer
  $d = strtotime("2012-09-10 -3 days"); //減三天 day也可以  1346976000
  // $d = strtotime("2012-09-10 +1 month");
  echo $d;
  echo "<br>";
  echo date("Y-m-d", $d); //將$d 時間戳記轉換回年月日
?> 
