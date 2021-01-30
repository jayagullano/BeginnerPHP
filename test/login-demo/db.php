<?php

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp', '3307');
    
    if(!$connection){
        die("<br>Database Connection Failed.<br>");
    }
?>