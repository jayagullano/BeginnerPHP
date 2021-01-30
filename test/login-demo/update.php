
<!-- 

        Author: Jay Agullano
        Since: January 30, 2020
        Version: 1.0
     
        This program is used to update records from the loginapp database 
        corresponding to a selected id.
       
    -->


<?php
    
    include './db.php';
    include './functions.php';

    //Loads all ids into the drop down menu
    $result = getQuery($connection, "SELECT * FROM users;");

?>

<?php
    
    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        if($username && $password && $id){
            
            $query = "UPDATE users SET ";
            $query .= "username = '$username', ";
            $query .= "password = '$password' ";
            $query .= "WHERE id = $id ";
            
            $result2 = mysqli_query($connection, $query);
            
            if($result2){
                echo "<br>Your account has been updated.<br>";
            } else {
                echo mysqli_error($connection);
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
</head>
<body>
   
   <!-- These classes are predefined from the bootstrap -->
   <div class="container">
       
       <div class="col-xm-6"> <!-- This moves the container to the right -->
                       
           <form action="update.php" method="post">
             
             <h1>Update Page</h1>
              
               <div class="form-group">
                   
                   <br><label for="username">User Name: </label>
                   <input type="name" name="username" placeholder="Enter User Name" class="form-control">
               </div>
               
               <div class="form-group">
                   
                   <br><label for="password">Password: </label>
                   <input type="password" name="password" placeholder="Enter Password" class = "form-control">
               </div>
               
               <div class="form-group">
                  
                  <br><select name="id" id="">
                  
                      <?php
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            echo "<option value='$id'>$id</option>";
                        }
                        ?>
                      
                  </select>
                   
               </div>
               
               <div class="form-group">
                   <br><input type="submit" name="submit" class="form-control">
               </div>
               
           </form>
           
       </div>
   </div>
</body>
</html>