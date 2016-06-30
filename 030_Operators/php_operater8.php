<?php
  
    echo "flag 1<br>";
    @require("MyLibrary.php"); //不顯示錯誤訊息，但還是會有錯誤，且後面的程式碼也不會再顯，表示不會在執行
    echo "flag 2<br>";

?>