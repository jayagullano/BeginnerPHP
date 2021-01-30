
    <!-- 

        Author: Jay Agullano
        Since: January 29, 2020
        Version: 1.0
     
        This program is used to check a value from within the database,
        more specifically the user name of the users table within the loginapp
        database.
       
    -->

    <?php

    include './db.php';

    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        
        if($username){
            
            $query = "SELECT * from users";
            
            $result = getQuery($connection, $query);
            
            if($result) { $success = true; }
            
        } else {
            echo "<br>Error. Empty Username. Try again.<br>";
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
   
   <form action="account-verification.php" method="post">
       <input type="name" name="username" placeholder="Enter a username.">
       <input type="submit" name="submit">
   </form>
   
   <?php
    
        if($success){
            
            $found = false;
            
            while($row = mysqli_fetch_assoc($result)){
                if($username === $row['username']){
                    $found = true;
                } 
            }
            
            if($found){
                echo "<br>Your account was found.<br>";
            } else {
                echo "<br>That account does not exist.<br>";
            }
            
        }
    
    ?>
    
</body>
</html>