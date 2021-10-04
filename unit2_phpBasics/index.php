<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Chapter 5 - PHP Basics </h1>
            <nav>
                <ul>
                    <li><a href="index.php">PHP Basics Home</a> </li>
                    <li><a href="arrays.php">Array Examples</a> </li>
                    <li><a href="class_examples.php">Class Examples</a> </li>
                    <li><a href="http://192.241.150.43/info.php">PHP info (Version 8.0.9)</a></li>
                </ul>
            </nav>
    </header>

    <p>This is HTML and <?php echo "this is php";?></p>
    

    <?php
    echo "this is a php block without the ending.";
    ?>  

    <p>Example of gettype method:
        <?php
        $a="green";
        $b=45;
        $c=45.23456;
        $d=true;
        $e=array();
        $f=null;
        echo gettype($a)."\n"; //OUTPUTS STRING
        echo gettype($b)."\n"; //OUTPUTS INTEGER
        echo gettype($c)."\n"; //OUTPUTS DOUBLE
        echo gettype($d)."\n"; //OUTPUTS BOOLEAN
        echo gettype($e)."\n"; //OUTPUTS ARRAY
        echo gettype($f)."\n"; //OUTPUTS NULL
        ?>
    </p>
   
    <p>Example of Casting:<?php
        $string = "51";
        $double = 51.50456;
        $integer = 51;
        echo gettype($string)."\n"; //OUTPUTS STRING
        echo gettype((int)$string)."\n"; //OUTPUTS INTEGER
        echo gettype($integer)."\n"; //OUTPUTS INTEGER
        echo gettype((string)$integer)."\n"; //OUTPUTS STRING
        echo gettype($double)."\n"; //OUTPUTS DOUBLE
        echo gettype((float)$string)."\n"; //OUTPUTS DOUBLE
        echo gettype((int)$double)."\n"; //OUTPUTS INTEGER
        echo gettype((string)$double)."\n"; //OUTPUTS STRING?>
    </p>
    <p>STRINGS: 
        <br>
        <?php
            $string = "This is a string.";
                echo $string[2]; //OUTPUTS I
                echo $string[6]; //OUTPUTS S
                echo $string[12]; //OUTPUTS R
        ?>
        <br>
        <?php
            $string = "This is a string!";
            echo $string;
            $string[2] = "A";
            echo $string; //OUTPUTS THAS IS A STRING
        ?>
        <br><br>
        <?php
          $string = "this is a
          multi-line string";
          echo $string;
        ?>
        <br>
        <?php
            $string = 'this is a multi-line string with "quotes" the double quotes render because the rest of
            the string is wrapped in single quotes';
            echo $string;
 
        ?>
        <br>
        <?php
            $string = "this is a multi-line string with \"quotes\" the double quotes render because they are
            escaped with the backslash character.";
            echo $string;
        ?>
        <br>
        <?php
            $string = <<<STR
            This is a heredoc multi-line string with "quotes", the double quotes render because we are using
            the heredoc, where both 'single' and "double quotes" render;
            STR;
            echo $string;
        ?>
        <br><br>
        <?php
            echo "Inserting a variable into a string: ";
            $favoriteAnimal = "cat";
            echo "My favorite animals are {$favoriteAnimal}s. ";
            echo "My favorite animals are ${favoriteAnimal}s!"; //Use curly brackets to distinguish vars from rest of string. 
        ?>
        <br><br>
        <?php
            $name = "Scott";
            $string = "This is a double-quoted string with a variable. Double quoted
            strings the variable value is displayed but not with single-quoted strings.
            My name is {$name}.";
            echo $string;
        ?>
        <br>
        <?php
            $name = "Scott";
            $string = <<<STR
            This is a heredoc mulit-line string with a variable. The variable value is
            displayed. My name is {$name}.
            STR;
            echo $string;
        ?>
        <br><br>
        <p>STRING CONCATENATION: </p>
        <?php
            $string = "This is a string"." (...a concatenated string). ";
            echo $string;
            $string = "You can also ";
            $string .= "add to strings using the ";
            $string .= "dot-equals (.=) operator";
            echo $string;
        ?>
                <br>
        <?php
            $string = "You can string numbers like (1 . 1), which will generate 11 as shown below:";
            echo $string;
            $string = 1 . 1;
            echo $string;
?>
                <br>
        <?php
            $string = "But if you do (1.1) you will get: ";
            echo $string;
            $string = 1.1;
            echo $string;//1.1
        ?>
                <br>
        <?php
            $string = "You can also ";
            $string2 = "concatenate variables with string datatypes";
            //EITHER IN DOUBLE QUOTES
            echo "$string,$string2";

            //SINGLE QUOTES
            echo $string.' , '.$string2;

            //OR WITH NO QUOTES, SEPARATED BY A COMMA
            echo $string,$string2;
            $string = "You can also";
            echo "{$string} add string variables to quotes using curly braces{}, //IF THE WHOLE STRING
            IS IN DOUBLE QUOTES";
        ?>

        <br><br>
        <p>SUBSTRINGS: </p>
        <?php
            $string = "0123456789";
            $substring = substr($string,3);//STARTS FROM POSITION 3 ON "3456789"
            echo $substring;
        ?>
        <br>
        <?php
            $substring = substr($string,0,5); //STARTS FROM POSITION 0 AND DISPLAYS THE NEXT FIVE CHARACTERS "01234"
            echo $substring;
        ?>

        <br>
        <?php
            $substring = substr($string,-4); //STARTS FROM THE END AND GOES TO THE LEFT 4 CHARACTERS "6789"
            echo $substring;
        ?>

        <br>
        <?php
            $substring = substr($string,3,-3); //STARTS AT POSITION 3 AND COUNTS BACK 3 FROM END "3456"
            echo $substring;
        ?>

        <br>
        <?php
        $substring = substr($string,-5,-3); //STARTS FROM THE END AND GOES TO THE LEFT 5 CHARACTERS (INCLUDING THE FIFTH CHARACTER), THEN STARTS FROM THE END AND GOES TO THE LEFT 3 CHARACTERS "56"
        echo $substring;
        ?>

        <br>
        <?php
            //using a different string
            $string = "456789";
            $substring = substr($string,3); //STARTS FROM POSITION 3 ON "789"
            ECHO $substring;
        ?>
                
        <br>
        <?php
            $substring = substr($string,0,5); //STARTS FROM POSITION 0 AND DISPLAYS THE NEXT FIVE CHARACTERS "45678"
            echo $substring;
        ?>
        <br><br>
        
        <p>COUNTING OCCURENCES: </p>
        <?php
        $myString = "I say, nay, nay, and thrice nay!";
        echo "How many nays in: \" ". $myString . "\"?   Answer: ";
        echo substr_count( $myString, "nay" ); // DISPLAYS '3' 
        ?>

        <br>
        <?php
            //3rd and 4th arguments specify (3) index position to start search and (4) how many chars to search before giving up. 
            $myString = "I say, nay, nay, and thrice nay!";
            echo substr_count( $myString, "nay", 9 ); // DISPLAYS '2'
            echo " and ";
            echo substr_count( $myString, "nay", 9, 6 ); // DISPLAYS '1'

        ?>

        <br><br>
        <p>STRING REPLACE: </p>
        <?php
            //str_replace() takes 3 args: Search string, replacment string, and string to search through. 
            $myString = "\"It was the best of times, it was the worst of times.\"";
            echo "{$myString} changes to ";
            echo str_replace( "times", "bananas", $myString );
        ?>
        <br>
        <?php
            //To see # of times text was replaced, add the 4th arg: $num
            // DISPLAYS "IT WAS THE BEST OF BANANAS, IT WAS THE WORST OF BANANAS,"
            echo str_replace( "times", "bananas", $myString, $num );
            // DISPLAYS "THE TEXT WAS REPLACED 2 TIMES."
            echo "The text was replaced {$num} times";
        ?>

        <br><br>
        <?php
            //You can pass an array of strings for the 1st and 2nd args to search for and replace multiple strings at once. 
            //A powerful way to do a global search and replace. 

            // PROVIDES: YOU SHOULD EAT PIZZA, SODA, AND ICE CREAM EVERY DAY
            $phrase = "You should eat fruits, vegetables, and fiber every day.";
            echo $phrase;
            $healthy = array("fruits", "vegetables", "fiber");
            $yummy = array("pizza", "soda", "ice cream");
            $newphrase = str_replace($healthy, $yummy, $phrase);
            echo $newphrase;

        ?>
          <br><br>
        <p>SUBSTRING REPLACE: </p>
        <?php
            //Substring replace searches a specific portion of the target string. 3 args: String to work on, replacement text, index to start replace. 
            //This replaces ALL of chars from the start point to the replacement text. 
            $myString = "It was the best of times, it was the worst of times,";
            echo substr_replace( $myString, "BANANAS!", 11 ); // DISPLAYS "IT WAS THE BANANAS"
        ?>
        <br>
        <?php
            //Adding a 4th arg = can add # of chars you want to replace: 
            echo substr_replace( $myString, "bananas", 19, 5 ); // DISPLAYS "IT WAS THE BEST OF BANANAS, IT WAS THE WORST OF TIMES,"
        ?>

        <br>
    ..<?php
          //4th arg can also be negative to indicate replacing up to that many chars from the end of the string. 
            echo substr_replace( $myString, "bananas", 19, -20 );
        ?>

        <br>
        <?php
        //Pass a zero value to simply insert replacement text into the string rather than replacing: 
        echo substr_replace( $myString, "really ", 3, 0 ); // DISPLAYS "IT REALLY WAS THE BEST OF TIMES, IT WAS THE WORST OF TIMES,"
        ?>

        <br><br>
        <p>STRING CONVERSIONS: </p>
        <?php
        $string = "This is a string. ";
        echo $string;
        echo strtoupper($string);
        echo strtolower($string);
        echo ucwords($string);
        ?>

        <br><br>
        <p>LOGIC aka CONDITIONALS: </p>
        <?php
            //Continue and break statments: 
            //This code will output all the odd numbers: 
            for ($i = 0; $i < 10; $i++) {
                if ($i % 2 == 0){
                continue; //goes back to begining of loop
                }
                echo "$i\n";
               }
        ?>
        <br>
        <?php
        //Break statements will stop the loop completely. Hany when searching for one item. 
        //This example breaks when it hits the first even number.
        for ($i = 1; $i < 10; $i++) {
            if ($i % 2 == 0){
            break; //terminates the loop
            }
            echo "$i\n";
           }
        ?>

        <br><br>
        <p>FUNCTIONS: </p>
        <?php
            function myFunction1($arg0,$arg1,$arg2){
                return $arg0 + $arg1 * $arg2;
            }
            echo "myFunction1: ";
            echo myFunction1(5,7,3); //RETURNS 26
            //Note: You cannot omit an argument, you must pass a parameter to every argument listed in the function
        ?>
        <br><br>
        <?php
            //You can however make an argument optional bt they must be listed as the last argument(s). 
            //The code is $arg = "option", you can include default values to make an argument optional. 
            function myFunction2($arg0, $arg1=1, $arg2=2){
                return $arg0 + $arg1 * $arg2;  //arg0 + (arg1*arg2) --> Orders of operations. 
            }
          
            echo "myFunction2:<br> ";
            echo myFunction2(5); //OUTPUTS 7
            echo "<br>";
            echo myFunction2(5,7); //OUTPUTS 19
            echo "<br>";
            echo myFunction2(5,7,3); //OUTPUTS 26
        ?>

<br><br>
        <p>SCOPE: </p>
        <?php
            $string = "scott";
            function myFunction4(){
                $string = "john";
                return $string;
            }
            echo $string;  //OUTPUTS SCOTT BECAUSE THE FUNCTION IS NOT CALLED
            echo "<br>";

            myFunction4();
            echo $string; //OUTPUTS SCOTT BECAUSE THE VARIABLE WITHIN THE FUNCTION IS LOCAL ONLY TO THE FUNCTION
            echo "<br>";

            echo myFunction4(); //OUTPUTS JOHN BECAUSE THE VARIABLE WAS RETURNED FROM THE FUNCTION AND THE FUNCTION WAS CALLED WITHIN THE ECHO STATEMENT.
        ?>
        <br>
        <p>KEYWORD GLOBAL: </p>
        <?php
            // global keyword makes the variable declared outside the function to be accessed within the function.
            $string = "scott";
            function myFunction5(){
                global $string;
                $string = "john";
            }
            myFunction5();
            echo $string; //OUTPUTS JOHN BECAUSE THE VARIABLE WAS GLOBAL SCOPE AND CHANGED IN THE FUNCTION

            echo "<br><br>";
                $string1 = "scott";
                $string2 = "sam";
                function myFunction6(){
                    global $string1, $string2;
                    $string1 = "john";
                    $string2 = "smith";
                }

                echo $string1." ".$string2; //OUTPUTS SCOTT SAM
                echo "<br>";
                myFunction6();
                echo $string1." ".$string2; //OUTPUTS JOHN SMITH

        ?><br>
        <p>REFERENCES: </p>
        <?php
            //A reference is like a shortcut or alias. When you create a reference to a PHP variable, you now have 2 wyas to read or change the var's content.
            $myVar = 123;
            $myRef = &$myVar;  //reference to variable $myVar
            $myRef++;
            echo $myRef ."\n"; // DISPLAYS"124"
            echo $myVar ."\n"; // DISPLAYS"124"

        ?>
        <p>RECURSIVE FUNCTIONS: </p>
        <?php
            //Recursive functions are functions that call themselves. Similar to a loop. 
            function recursive($i){
                echo "The value of variable i is $i\n";
                $i += 1;
                if ($i <= 10){
                recursive($i);
                }
               }
               $i = 1;
               recursive($i);
           
        ?>
        <br><br>






    </p>

</body>
</html>