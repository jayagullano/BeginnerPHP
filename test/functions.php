

<?php 
    
    function sayThis($in){
        echo $in;
    }

    function printArray($array){
        foreach($array as $elem){
            echo $elem . " ";
        }
    }
    
    function add($num1, $num2){
        return $num1 + $num2;
    }
    
    function addArr($array){
        $sum = 0;
        foreach($array as $elem){
            $sum += $elem;
        }
        return $sum;
    }
?>
