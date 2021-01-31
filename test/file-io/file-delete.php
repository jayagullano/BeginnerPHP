<?php

    if(isset($_POST['submit'])){
        unlink("example.txt");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <form action="file-delete.php" method="post">
       <input type="submit" name="submit" value="Delete">
    </form>
    
</body>
</html>