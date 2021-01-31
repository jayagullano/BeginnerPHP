<?php

class Car{
    
    /* Member Variables 
    var $wheels;
    var $make;
    var $model; */
    
    public $wheels;
    protected $make;
    private $model;
    static $isCanadian = true;
    
    /* Parameterized Constructor */
    function __construct($wheels, $make, $model){
        $this->wheels = $wheels;
        $this->make = $make;
        $this->model = $model;
    }
    
    /* Accessor Methods */
    function getMake(){ return $this->make; }
    function getModel() { return $this->model; }
    function getWheels() { return $this->wheels; }
    
    /* Mutator Methods */
    function setMake($make){ $this->make = $make; }
    function setModel($model) { $this->model = $model; }
    function setWheels($wheels) { $this->wheels = $wheels; }
};

?>