<?php

/*

        Author: Jay Agullano
        Since: January 30, 2020
        Version: 1.0
     
        This program hosts the functions to be used in the programs for the 
        the login-demo application.
       
*/
    
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

    /* This function registers a user based on the information sent */
    function RegisterUser(){
        global $connection;
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //Only insert new values if the $username and $password //are set
        if($username && $password){
            
            //Checks for valid SQL capability
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
        
            //Hash Functionality
            $hashFormat = "$1$"; //md5
            $salt = "$thisisarandomsalttext$";
        
            $hashAndSalt = $hashFormat . $salt;
            
            $password = crypt($password, $hashAndSalt);
            
            $query = "INSERT INTO users(username, password) ";
            $query .= "VALUES ('$username', '$password')";

            $result = getQuery($connection, $query);
            
            if($result){
                echo "<br>Your value has successfully been added.<br>";
            } else {
                echo "<br>Your value has failed. Please try again.<br>";
            }
            
        } else {
            echo "<br>Empty Form Sent. Please Try Again.<br>";
        }
    }

    /* This functions takes the information from the update form
       and submits a query to change that id. */
    function UpdateTable(){
        global $connection;
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        if($username && $password && $id){
            
            $query = "UPDATE users SET ";
            $query .= "username = '$username', ";
            $query .= "password = '$password' ";
            $query .= "WHERE id = $id ";
            
            $updateResult = mysqli_query($connection, $query);
            
            if($updateResult){
                echo "<br>Your account has been updated.<br>";
            } else {
                echo mysqli_error($connection);
            }
        }
    }

    /* This functions takes the information from the delete form
       and submits a query to change that id. */
    function DeleteRow(){
        global $connection;
        
        $id = $_POST['id'];
        
        if($id){
            
            $query = "DELETE FROM users ";
            $query .= "WHERE id = $id ";
            
            $deleteResult = mysqli_query($connection, $query);
            
            if($deleteResult){
                echo "<br>Your account has been deleted.<br>";
            } else {
                echo mysqli_error($connection);
            }
        }
    }

?>