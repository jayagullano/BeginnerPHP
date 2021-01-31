
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
    $selectResult = getQuery($connection, "SELECT * FROM users;");

?>

<?php
    
    if(isset($_POST['submit'])){
        DeleteRow();
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
                       
           <form action="delete.php" method="post">
             
             <h1>Delete User</h1>
               
               <div class="form-group">
                  
                  <br><select name="id" id="">
                  
                      <?php
                        while($row = mysqli_fetch_assoc($selectResult)){
                            $id = $row['id'];
                            $username = $row['username'];
                            echo "<option value='$id'>$username</option>";
                        }
                        ?>
                      
                  </select>
                   
               </div>
               
               <div class="form-group">
                   <br><input type="submit" name="submit" value="Delete" class="form-control" placeholder="Delete">
               </div>
               
           </form>
           
       </div>
   </div>
</body>
</html>