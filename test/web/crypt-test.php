
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    //Use a SHA-512
    $value = crypt("testPassword", '$1$saltbae$');
    
    echo $value . "<br>";
    
    ?>
    
</body>
</html>