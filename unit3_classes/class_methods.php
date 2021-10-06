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
        public function hello() {
        echo "Hello, World!<br> ";
        }

        public function aMethod( $param1, $param2 ) {
            // WRITE CODE HERE
            return true;
        }
    }
    $obj = new MyClass;
    $obj->hello();



    //keyword: $this: 
    class MyClass2 {
        public $greeting = "HELLO, WORLD! (MyClass2)<br>";
        public function hello() {
        echo $this->greeting;
        }
       }
       $obj2 = new MyClass2;    
       $obj2->hello(); // DISPLAYS "HELLO, WORLD!", In this case, $this = $obj2.

       $obj3 = new MyClass2;   
       $obj3->hello(); // DISPLAYS "HELLO, WORLD!", In this case, $this = $obj3.


    //Using $this to call an object's method with another method of the same object. 
    class MyClass3 { 
        public function getGreeting() {
            return "Hello, World! (MyClass3)<br>";
        }
        public function hello() {
        echo $this->getGreeting();
        }
    }
    $obj4 = new MyClass3;
    $obj4->hello(); // DISPLAYS "HELLO, WORLD!"

    //Generally, don't use echo in the class. Instead, return a value and echo that returned value when the method is called from the object.
    class MyClass4 {
        public $greeting = "hello, world! (MyClass4)<br>";
        public function hello() {
        return $this->greeting;
        }
       }
       $obj5 = new MyClass4;
       echo $obj5->hello(); // DISPLAYS "HELLO, WORLD!"
       
    echo "<br><br> ";

    //Static Methods:
    class Car {
        public static function calcMpg( $miles, $gallons ) {    //Static because doesn't depend on the actual object to do its job.
        return ( $miles / $gallons );
        }
    }
       echo "MPG is: " . Car::calcMpg( 168, 6 );  //Calling code does NOT need to create a Car object to use calcMpg().
    
        echo "<br><br> ";

    //Keyword; $self: Like $this but with methods instead of objects. 
    class Car2 {
        public static function calcMpg( $miles, $gallons ) {
            return ( $miles / $gallons );
            }
        public static function displayMpg( $miles, $gallons ) {
            echo "This car’s MPG is: " . self::calcMpg( $miles, $gallons );
            }
        }
        echo Car2::displayMpg( 168, 6 );
?>