<!DOCTYPE html>
<?PHP session_start();
//var_dump($_SESSION);
?>
<html>
    <head>
        
    </head>
    <body>
      Hello! <?php echo $_SESSION["name"];?>
      
    </body>
</html>