<?php

class Animal{
    
    protected $name;
    protected $age;
    
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    
    function message(){
        echo $this->name . "<br>" . $this->age;
    }
}

?>