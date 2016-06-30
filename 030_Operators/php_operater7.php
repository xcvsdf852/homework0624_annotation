<?php
  $x = 3;
  if ($x >= 10 && foo()) //  雙&& 部分結果已知 提前結束，所以當$x 沒有大於等於 10  後面就不再執行
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo()) //  單& 部分結果已知 後 還是會執行foo()
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}



?>