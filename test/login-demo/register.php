<!-- 

        Author: Jay Agullano
        Since: January 29, 2020
        Version: 1.0
     
        This program is used to display a register screen.
       
    -->
    
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
           
           <form action="register-process.php" method="post">
             
             <h1>Create New User</h1>
              
               <div class="form-group">
                   
                   <br><label for="username">User Name: </label>
                   <input type="name" name="username" placeholder="Enter User Name" class="form-control">
               </div>
               
               <div class="form-group">
                   
                   <br><label for="password">Password: </label>
                   <input type="password" name="password" placeholder="Enter Password" class = "form-control">
               </div>
               
               <div class="form-group">
                   <br><input type="submit" name="submit" class="form-control">
               </div>
               
           </form>
           
       </div>
   </div>
</body>
</html>