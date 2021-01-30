
    <?php

    include './db.php';
    include './functions.php';

    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username && $password){
            
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
   
   <?php
    
        if($success){
            
            $found = false;
            
            while($row = mysqli_fetch_assoc($result)){
                if($username == $row['username']){
                    if($password == $row['password']){
                        $found = true;   
                    }
                } 
            }
            
            if($found){
                echo "<br>Login Successful.<br>";
            } else {
                echo "<br>Login Failed. Your password or username may be incorrect.<br>";
            }
            
        }
    
    ?>
    
</body>
</html>