<?php
  $d = mktime(13, 30, 0, 9, 10, 2012); //產生一個時間戳記 左到右的順序為 時分秒月日年
  
  // echo gettype($d), "<br>";  //integer
  
  echo $d; //1347235200
  echo "<br>";
  echo date("Y-m-d H:i:s", $d);//2012-09-10 13:30:00  與第一樣可以對照
  
  echo "<hr>";
  $x = getdate($d);

  var_dump($x);
 // array(11) { 'seconds' => int(0) 'minutes' => int(30) 'hours' => int(13) 'mday' => int(10) 'wday' => int(1) 'mon' => int(9) 'year' => int(2012) 'yday' => int(253) 'weekday' => string(6) "Monday" 'month' => string(9) "September" [0] => int(1347283800) }
?>
