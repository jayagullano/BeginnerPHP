<?php
    
    /* This function handles the connection access using mysqli_connect() */
    function getConnection($address, $user, $pass, $database, $port){
        $connection = mysqli_connect($address, $user, $pass, $database, $port); 
                                    //Address, username, password, database
        
        if($connection){
            return $connection;
        } else {
            die("<br>Database Connection Failed.<br>");
        }
    }

    /* This function handles submitting a query using mysqli_query() */
    function getQuery($connection, $query){
        
        $result = mysqli_query($connection, $query);
        
        if($result){
            return $result;
        } else {
            die("<br>Query Failed.<br>");
        }
    }

?>