<!-- 

        Author: Jay Agullano
        Since: January 29, 2020
        Version: 1.0
     
        This program is used to display the total list
        of users from within the loginapp users database.
       
    -->
    
<?php

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp', '3307');
    
    if(!$connection){
        die("<br>Database Connection Failed.<br>");
    }

    $result = mysqli_query($connection, "SELECT * FROM users;");

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