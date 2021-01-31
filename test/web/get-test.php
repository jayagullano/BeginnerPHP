<?php

    print_r($_GET);

    echo "<br><br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
  
   
   <form action="get-test.php" method="get">
        <input type="text" name="cat">
       <input type="submit" name="submit">
   </form>
   
   <?php $id = 100; ?>
   
   <br><a href="get-test.php?id=<?php echo $id; ?>">Click Here</a>
    
</body>
</html>