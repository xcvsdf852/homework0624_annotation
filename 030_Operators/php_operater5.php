<?php
  $x = 1;
  $y = $x++;  //先把$x值放入 $y  結束後$x 再加1
  
  //$y= $x;
  //$x++;
  
  echo "x = $x, y = $y";
  
  echo "<br>";

  $x = 1;
  $y = ++$x; //先將$x+1  後 再存入 $y
  
  //$x++;
  //$y= $x;
  echo "x = $x, y = $y";
?>
