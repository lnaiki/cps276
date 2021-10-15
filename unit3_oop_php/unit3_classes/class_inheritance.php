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
    //Using inheritance, you can create child classes that are based on another class: the parent class. 
    //Child classes inherit all the properties and methods of its parent and can also add additional properties and methods. 
    class ParentExample {
        // GENERAL Parent PROPERTIES AND METHODS HERE
    }
    class ChildExample extends ParentExample {
        // Child-SPECIFIC PROPERTIES AND METHODS HERE
    }

    class Shape {
        private $_color = "black";  //private properties can be accessed by children.
        private $_filled = false;
        public function getColor() {
            return $this->color;
        }
        public function setColor( $color ) {
                $this->color = $color;
        }
        public function isFilled() {
            return $this->filled;
        }
        public function fill() {
            $this->filled = true;
        }
        public function makeHollow() {
            $this->filled = false;
        }
    }

        class Circle extends Shape {
            private $_radius = 0;
            public function getRadius() {
                return $this->radius;
            }
            public function setRadius( $radius ) {
                $this->radius = $radius;
            }
            public function getArea() {
                return M_PI * pow( $this->radius, 2 );
            }
        }

       class Square extends Shape {
            private $_sideLength = 0;
            public function getSideLength() {
                return $this->sideLength;
            }
            public function setSideLength( $length ) {
                $this->sideLength = $length;
            }
            public function getArea() {
                return pow( $this->sideLength, 2 );
            }
        }

    $myCircle = new Circle;
    $myCircle->setColor( "red" );
    $myCircle->fill();
    $myCircle->setRadius(4);
    echo "My Circle: \n";
    echo "My circle has a radius of " . $myCircle->getRadius().".<br>";
    echo "It is " . $myCircle->getColor() . " and it is " . ( $myCircle->isFilled() ? "filled" : "hollow").".<br>";
    echo "The area of my circle is: " . $myCircle->getArea()."<br><br>";

    $mySquare = new Square;
    $mySquare->setColor("green");
    $mySquare->makeHollow();
    $mySquare->setSideLength(3);
    echo "My Square: \n";
    echo "My square has a side length of " . $mySquare->getSideLength().".<br>";
    echo "It is " . $mySquare->getColor() . " and it is " . ( $mySquare->isFilled() ? "filled" : "hollow").".<br>";
    echo "The area of my square is: " . $mySquare->getArea()."<br><br>";


    //You can override a parent's method by creating another function in the child class with the same method name. 
    class Fruit {
        public function peel() {
            echo "I’m peeling the fruit...\n";
        }
        public function slice() {
            echo "I'm slicing the fruit...\n";
        }
        public function eat() {
            echo "I’m eating the fruit. Yummy!\n";
        }
        public function consume() {
            $this->peel();
            $this->slice();
            $this->eat();
        }
    }
    
    class Grape extends Fruit {
        public function peel() {
            echo "No need to peel a grape!\n";
        }
        public function slice() {
            echo "No need to slice a grape!\n";
        }
    }

    class Banana extends Fruit {
        public function consume() {
            echo "I'm breaking off a banana. \n";
            parent::consume();
        }
       }

    echo "Consuming an apple...\n";
    $apple = new Fruit;
    $apple->consume();

    echo "<br><br>";

    echo "Consuming a grape...\n";
    $grape = new Grape;
    $grape->consume();

    echo "<br><br>";

    echo "Consuming a banana...\n";
    $banana = new Banana;
    $banana->consume();
?>