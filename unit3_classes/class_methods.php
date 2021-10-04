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
                    <li><a href="http://192.241.150.43/cps276/"">CPS 276 Home</a> </li>
                    <li><a href="index.php">Class Properties</a></li>
                    <li><a href="class_methods.php">Class Methods</a></li>

                </ul>

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
       
?>