<?php

/*

        Author: Jay Agullano
        Since: January 30, 2020
        Version: 1.0
     
        This program is used create a super global variable that connects to the loginapp
        database under port number 3307.
       
*/

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp', '3307');
    
    if(!$connection){
        die("<br>Database Connection Failed.<br>");
    }
?>