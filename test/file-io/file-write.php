
<?php

$file = "example.txt"; //Declare name of the files

if($handle = fopen($file, 'w')){
    
    fwrite($handle, "Hello World.");
    
    fclose($handle); //closes the file
    
} else {
    
    echo "<br>Error. File could not be opened.<br>";
    
}

?>