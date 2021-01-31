<?php

include 'Car.php';

$myCar = new Car(4, 'Mitsubishi', 'RVR'); //Instantiated Class Object

$myCar->wheels = 10; //Assigning a value implicitly
$myCar->setMake('Toyota'); //Assigning a value explicitly

if(Car::$isCanadian) { //Accessing static member
    echo "Definitely Canadian.<br><br>"; 
}

//Invoking the class methods
echo $myCar->getMake() . "<br>";
echo $myCar->getModel() . "<br>";
echo $myCar->getWheels() . "<br>";



if(class_exists(Car)){ //class_exists()
    echo "This class exists.";
} else {
    echo "This class does not exist.";
}

if(method_exists("Car", "getMake")){ //method_exists()
    echo "This method exists.";
} else {
    echo "This method does not exist.";
}

?>