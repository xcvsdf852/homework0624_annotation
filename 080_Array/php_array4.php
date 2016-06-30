<?php
    header("content-type: text/html; charset=utf-8");
    //關聯式陣列
    $myArray = array('myName'=>'Jeremy',
                    'myHeight'=>191,
                    'myWeight'=>91);
    echo "大家好，我的名字叫".$myArray['myName']."<br>"; //索引值可以命名
    
    // echo "我的體重".$myArray[2];  //數值是拿不出資料的
?>