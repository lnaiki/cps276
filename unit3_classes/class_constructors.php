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
                    <li><a href="index.php">Class Properties</a></li>
                    <li><a href="class_methods.php">Class Methods</a></li>
                    <li><a href="class_encapsulation.php">Class Encapsulation</a></li>
                    <li><a href="class_inheritance.php">Class Inheritence</a></li>
                    <li><a href="class_constructors.php">Class Constructors</a></li>

                </ul>
        </nav>
</body>
</html>

<?php
    //By creating a constructor, you can cause other actions to be triggered when the object is created.
    //To create a constructor, add a method with the special name: __construct() to your class (2 underscores + "construct" + () )

    //Simple example displays a message everytime a MyClassExample object is created. 
    class MyClassExample {
        function __construct() {
        echo "Whoa! I’ve come into being. <br> ";
        }
       }
       $obj = new MyClassExample; // DISPLAYS "WHOA! I’VE COME INTO BEING."


    class Person {
        private $_firstName;
        private $_lastName;
        private $_age;
        public function __construct( $firstName, $lastName, $age ) {
            $this->_firstName = $firstName;
            $this->_lastName = $lastName;
            $this->_age = $age;
    }   
        public function showDetails() {
            echo "$this->_firstName $this->_lastName, age $this->_age\n";
        }
    }

    $p = new Person( "Harry", "Walters", 28 );
    $p->showDetails(); // Displays "Harry Walters, age 28"
       
    echo "<br><br>";
    
    //Constructors are only called from the specific class. For a child class, only the child class's constructor is called. 
    //You can make a child class call its parent's constructor with parent::__construct();
        class MyClass {
            function __construct() {
            echo "Hello Class! ";
            }
        }
            //USES THE PARENT CLASS CONSTRUCT
            class Test1 extends MyClass {
            }
            //OVERRIDES THE PARENT CLASS CONSTRUCT
            class Test2 extends MyClass {
                function __construct(){
                echo "My name is Scott.";
                }
            }
            //USES THE PARENT CLASS AND ITS OWN CONTRUCTOR
            class Test3 extends MyClass {
                function __construct(){
                    parent::__construct();
                    echo ", Welcome To PHP ";
                }
            }

        $tst1 = new Test1();
        echo "<br>";
        $tst2 = new Test2();
        echo "<br>";
        $tst3 = new Test3();

?>