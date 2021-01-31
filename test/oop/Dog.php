<?php

include 'Animal.php';

class Dog extends Animal{
    
    var $breed;
    
    function __construct($name, $age, $breed){
        parent::__construct($name, $age); 
        $this->breed = $breed;
    }
    
    function message(){
        echo $this->name . "<br>" . $this->breed . "<br>" . $this->age;
    }
    
};

$obj = new Dog('John', 23, 'Labrador Retriever');

$obj->message();

?>