<?php


    $name = "CookieName";
    $value = 100;
    $expire = time() + (60*60*24*7);

    /* Time retrieves the seconds from epoch date, which is
        January 1st, 1970. */
    
    setcookie($name, $value, $expire);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    if(isset($_COOKIE['CookieName'])){
        echo "<br>Cookie has been found.<br>";
        echo "Value: " . $_COOKIE['CookieName'];
    } else {
        echo "<br>Cookie is not registered.<br>";
    }
    
    ?>
    
</body>
</html>