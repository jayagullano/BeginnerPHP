    
<?php

$file = "example.txt"; //Declare name of the files

if($handle = fopen($file, 'r')){
    
    //$content = fread($handle, 10); //Each bit represents a character
    $content = fread($handle, filesize($file));
    
    echo $content;
    
    fclose($handle); //closes the file
    
} else {
    
    echo "<br>Error. File could not be opened.<br>";
    
}

?>