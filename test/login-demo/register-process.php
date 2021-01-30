<?php 
    
    include './db.php';
    include './functions.php';

    if(isset($_POST['submit'])){  
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //Only insert new values if the $username and $password //are set
        if($username && $password){
            
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
</body>
</html>