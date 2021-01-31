<?php 

    /*

        Author: Jay Agullano
        Since: January 30, 2020
        Version: 1.0
     
        This program is used to process the users request to create 
        a new user.
       
*/
    
    include './db.php';
    include './functions.php';

    if(isset($_POST['submit'])){  
        
        RegisterUser();
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