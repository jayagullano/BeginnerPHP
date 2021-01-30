<!-- 

        Author: Jay Agullano
        Since: January 29, 2020
        Version: 1.0
     
        This program is used to display the total list
        of users from within the loginapp users database.
       
    -->
    
<?php

    include './db.php';
    include './functions.php';

    $result = getQuery($connection, "SELECT * FROM users;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
  <?php
      
    echo "<h1>Users:</h1><br>";
    
    while($row = mysqli_fetch_assoc($result)){
        print_r($row['username']);
        echo "<br>";
    }
    
  ?>
   
    
</body>
</html>