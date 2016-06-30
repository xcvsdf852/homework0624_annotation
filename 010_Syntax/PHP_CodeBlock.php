<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
</head>
<body>

<?php 
  // It's PHP code block.
  
  $x = 3;
  
  echo $x;
  
  // 區分大寫小寫
  // echo $X;
  
  //php.ini配置項指令區分大小寫
  //如 file_uploads = 1 不能寫成 File_uploads = 1
  echo "<hr>";
  //函數名、方法名、類名不區分大小写  但是  建議統一都區分大小寫
   function show(){
    echo "Hello World";
   }
   
    show(); //輸出 Hello World 
    SHOW(); //輸出 Hello World
    
    echo "<hr>";
     class cls{
       static function func(){ //主要的功用是用來指定變數或函數的類別化
       echo "hello world";
      }
     }
     Cls::FunC(); //輸出hello world   //用類別方法(靜態呼叫變數)
     
     echo "<hr>";
     //魔術常量不區分大小寫，推薦大寫
      echo __line__; //輸出 40
      echo __LINE__; //輸出 41  該行位置
    
    //NULL、TRUE、FALSE不区分大小写
?>

</body>
</html>