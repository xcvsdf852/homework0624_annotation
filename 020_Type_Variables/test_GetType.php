<?php
  $x = 123;
  echo gettype($x), "<br>";//integer
  //gettype 可以讀出()內的變數型態
  $x = 123.0;
  echo gettype($x), "<br>";//double

  $x = "123.0";
  echo gettype($x), "<br>";//string
  
  $x = TRUE;
  echo gettype($x), "<br>";//boolean
  
?>



