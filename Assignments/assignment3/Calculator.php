<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Calculator {

    public $operator;
    public $int1;
    public $int2; 
    public $strSolution = "";

    function calc ($operator, $int1=null , $int2=null) {

        if (is_string($operator) && is_int($int1) && is_int($int2)) {

            switch ($operator){
                case "+": 
                    $strSolution = "The sum of the numbers is " . ($int1 + $int2) . "<br>";
                    break;

                case '-': 
                    $strSolution = "The difference of the numbers is " . ($int1 - $int2). "<br>";
                    break;

                case '*': 
                     $strSolution = "The product of the numbers is " . ($int1 * $int2). "<br>";
                     break;

                case '/': 
                    if ($int2 != 0) {
                        $strSolution = "The division of the numbers is " . ($int1 / $int2). "<br>";
                        break;
                    }
                    else {
                        $strSolution = "Cannot divide by zero.". "<br>";
                        break;
                    }
                    
            }
        }
        else {
            $strSolution = "You must enter a string and two numbers <br>";
        }

        return $strSolution;
    }
}
?>

</body>
</html>
