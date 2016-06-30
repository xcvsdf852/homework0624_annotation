<?php
  echo strtr("02468-86420", "86420", "13579"); //13579-97531 函数转换字符串中特定的字符
  //strtr(string,from,to)  from	必需（除非使用數組）。規定要改變的字符。
                        // to	必需（除非使用數組）。規定要改變為的字符。
                        
  //8轉換成1 ，6轉換為3，參照轉換
  
  //陣列
  echo '<hr>';
  $arr = array("Hello" => "Hi", "world" => "earth");
  echo strtr("Hello world",$arr);//索引當成替換目標，替換成值的部分
?>