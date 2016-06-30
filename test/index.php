<!DOCTYPE html>

<?php
session_start();
if($_POST["btn"]){
    //echo "yes";
    //echo "Hello".$_POST['textname'];
    //echo "Hello {$_POST['textname']}"; //因為是陣列所以要加大括號{}
    //header("location: http://www.udn.com");
    $_SESSION["name"] = $_POST["textname"];
    header("location: hello.php");
    
}else{
    echo "NO";
}
?>

<html>
    <head>
        
    </head>
    <body>
        <form method="POST">
            Your name <input type="text" name = "textname"/>
            <br>
            <input type = "submit" name="btn" value="OK"/>
            
        </form>
    </body>
</html>
