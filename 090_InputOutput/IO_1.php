<?php

echo "Path and FileName:" . __FILE__ . "<br />";  //列出目前應用程式的位置
echo "Path: " . dirname ( __FILE__ );//路徑，是字串處理涵式，若是沒該檔案，還是會顯示路徑
echo "Filename: " . basename ( __FILE__ ) . "<br />";//檔名
echo "Filesize: " . filesize ( __FILE__ ); //檔案大小




// Path and FileName:/home/ubuntu/workspace/cyp05/090_InputOutput/IO_1.php
// Path: /home/ubuntu/workspace/cyp05/090_InputOutputFilename: IO_1.php
// Filesize: 339
?> 
