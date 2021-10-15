<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
                <ul>
                    <li><a href="http://192.241.150.43/cps276/">CPS 276 Home</a> </li>
                    <li><a href="index.php">Classes Index</a></li>
                    <li><a href="class_properties.php">Classes Properties</a></li>
                    <li><a href="class_methods.php">Class Methods</a></li>
                    <li><a href="class_encapsulation.php">Class Encapsulation</a></li>
                    <li><a href="class_inheritance.php">Class Inheritence</a></li>
                    <li><a href="class_constructors.php">Class Constructors</a></li>

                </ul>
        </nav>

</body>
</html>

<?php

    class MyClass {
        public $property1; // Public properties can be accessed by any code whether inside or outside of class. 
        private $property2; //Private can only be accessed by code inside the same class. Use methods in same class to access. 
        protected $property3; // Protected properties are like private EXCEPT can be accessed by any class that inherits from the same class.
                //Access an object's property value from calling code with: $object->property;

        public static $property4; //Static embers are independent of any object derived from that class. Access w/ className::$propertyName=value;
                //Good for recording a persistent value relevent to a class but not related to specific objects. 

       const MYCONSTANT = 123; // Use uppercase for all class constant names. Access using :: operator. 
    }

    class Car{
        const HATCHBACK = 1;
        const STATION_WAGON = 2;
        const SUV = 3;
        public $model;
        public $color;
        public $manufacturer;
        public static $numberSold = 123;
        public $type;
    }

    Car::$numberSold++;
    echo Car::$numberSold . "<br>";

    $beetle = new Car(); 
    $beetle->color="red";
    $beetle->manufacturer = "Volkswagen";
    $mustang = new Car();
    $mustang->color="green";
    $mustang->manufacturer = "Ford";
    echo $beetle->color."\n";
    echo $beetle->manufacturer."<br>";
    echo $mustang->color."\n";
    echo $mustang->manufacturer."<br>";
    print_r($beetle);   //Displays "Car Ojbect ()" b/c is empty. print_r can be used to output array contents or objects. 
    print_r($mustang); 

    $myCar = new Car();
    $myCar->model = "Dodge Caliber";
    $myCar->color = "blue";
    $myCar->manufacturer = "Chrysler";
    $myCar->type = Car::HATCHBACK;
    echo "This $myCar->model is a ";
        switch ( $myCar->type ) {
            case Car::HATCHBACK: echo "hatchback"; break;
            case Car::STATION_WAGON: echo "station wagon"; break;
            case Car::SUV: echo "SUV";break;
        }

?>

