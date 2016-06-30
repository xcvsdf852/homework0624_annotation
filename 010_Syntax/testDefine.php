<?php
  define("test", 123);
  echo test, "<br>";
  
//bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
// 在设定以后，常量的值无法更改
// 常量名不需要开头的美元符号 ($)
// 作用域不影响对常量的访问
// 常量值只能是字符串或数字
  
  //定义一个大小写不敏感的常量：

    define("GREETING","Hello world!",TRUE);
    // echo constant("greeting");//规定要检查的常量的名称。
    // echo greeting;
    
    // echo '<hr>';
    // echo constant("greeting123");//检查的常量的名称。
    // echo '<hr>';
    // echo greeting123; //直接輸出，所以不會出現錯誤警告
?>
