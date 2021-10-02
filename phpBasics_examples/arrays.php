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
        <h1> PHP Basics - Array Examples </h1>
            <nav>
                <ul>
                    <li><a href="index.php">PHP Basics Home</a> </li>
                    <li><a href="arrays.php">Array Examples</a> </li>
                    <li><a href="http://192.241.150.43/info.php">PHP info (Version 8.0.9)</a></li>
                </ul>
            </nav>
    </header>
    <p>
        <?php
           //Syntax :  $variableName = array();  OR Can also be written: $variableName = [];
           $arr = array("string",43,true,$object,array(1,2,3)); //Array has 5 spaces (0-4). 0-string, 1- INT 43, 2 - Boolean, 3 - Object, 4- another array 
           echo "<pre>"; //pre-formatted text
            print_r($arr);
            echo "</pre>"; //Use print_r to print arrays and object structures. Don't use just echo b/c wil have an "array to string conversion" error
        ?>
        <br><br>
        <?php
            //Arrays are mutable meaning they can be changed. 
            echo "Changing or Updating an array: <br>";
            $arr = array(1,2,3,4);
            echo "<pre>";
            print_r($arr);
            echo "</pre>";

            $arr[2] = "scott";
            echo "<pre>";
            print_r($arr);
            echo "</pre>";

        ?>
        <br><br>
        <?php
            echo "Counting array length: <br>";
            $arr = array(1,2,3,4);
            $count = count($arr);
            echo "Array length: {$count}" ;//will output 4

        ?>
        <br><br>
        <?php
            echo "Looping thru an array: <br>" ;
            $arr = array(1,2,3,4,5,6,7,8,9);
            $len = count($arr);
            $output = "";
            for ($i=0;$i<$len;$i++){
                $output .= $arr[$i];
                echo $output."<br />";
            }
        ?>
        <br><br>
        <?php
            echo "For Each Loop in Arrays: <br>";     
            $arr = array(1,2,3,4,5,6,7,8,9);
            $output = "";
            foreach($arr as $i){
            $output .= $i;
            echo $output."<br />";
}
        ?>
            <br><br>
            <?php
            echo "Adding/Removing elements to/from an Array: <br>";  
            // array_push - adds multiple elements to the end of an array.
            // array_unshift - add multiple elements to the beginning of an array.
          
            $arr = array();
            echo "<pre>";
            print_r($arr); //OUTPUTS EMPTY ARRAY

            array_push($arr,1,2,3,4,5); //PUSH ADDS ELEMENTS TO THE END OF AN ARRAY
            print_r($arr); //OUTPUTS [1, 2, 3, 4, 5, 6]
            
            array_unshift($arr,-2,-1,0); //UNSHIFT ADDS ELEMENTS TO THE BEGINNING OF AN ARRAY
            print_r($arr); //OUTPUTS [-2, -1, 0, 1, 2, 3, 4, 5, 6]
            echo "</pre>";

            // array_pop - removes and returns the last element of the array.
            // array_shift - removes and returns the first element of the array
            $arr = array(-2, -1, 0, 1, 2, 3, 4, 5, 6);
            echo "<pre>";
            echo array_pop($arr)."<br />"; //OUTPUTS 6

            print_r($arr); //OUTPUTS [-2, -1, 0, 1, 2, 3, 4, 5]

            echo array_shift($arr)."<br />"; //OUTPUTS -2

            print_r($arr); //OUTPUTS [-1, 0, 1, 2, 3, 4, 5]
            echo "</pre>";
            ?>


            <br><br>
            <?php
             echo "Slice Arrays: <br>";  
            //Copies part of an array w/o changing the original array. Start parameter is the index (*starts at 0) in which the slice begins. 
            echo "<pre>";
            $arr = array(1,2,3,4,5,6,7,8,9);
            print_r($arr); //SHOW ORIGINAL ARRAY
            $newArr = array_slice($arr,4); //COPIES FROM INDEX 4 ON
            print_r($newArr);
            $newArr = array_slice($arr,4,3); //COPIES FROM INDEX 4 AND GOES FORWARD THREE INDEXES
            print_r($newArr);
            $newArr = array_slice($arr,4,3,true); //COPIES FROM INDEX 4 AND GOES FORWARD THREE INDEXES PRESERVING THE INDEX KEYS
            print_r($newArr);
            echo "</pre>";
            ?>
            <br><br>

            <?php
                // Also slice with negative integers using the string.slice method: 
                echo "<pre>";
                $arr = array(1,2,3,4,5,6,7,8,9);
                print_r($arr); //SHOW ORIGINAL ARRAY
                $newArr = array_slice($arr,-4); //COPIES FROM END BACK 4 INDEXES
                print_r($newArr);
                $newArr = array_slice($arr,-4,-2); //COPIES FROM END BACK 4 INDEXES AND THEN STARTS FROM BACK AND GOES TWO INDEXES
                print_r($newArr);
                $newArr = array_slice($arr,-4,-2,true); //COPIES FROM END BACK 4 INDEXES AND THEN STARTS FROM BACK AND GOES TWO INDEXES PRESERVING THE INDEX KEYS
                print_r($newArr);
                echo "</pre>";

            ?>
            <br><br>

            <?php
           echo "Splice Arrays: <br>";  
           //Splice deletes a specified number of elements and optionally replaces them. 
           //** SPLICE CHANGES THE ORIGINAL ARRAY */
           echo "<pre>";
           $arr = array(1,2,3,4,5,6,7,8,9);
           print_r($arr); //SHOW ORIGINAL ARRAY
           array_splice($arr,4); //GOES FROM FIRST INDEX AND COUNTS 4 IN
           print_r($arr);
           $arr = array(1,2,3,4,5,6,7,8,9); //BECAUSE IT CHANGES THE ORIGINAL ARRAY I HAVE TO RESET $ARR
           array_splice($arr,4,3); //GOES FROM FIRST INDEX AND COUNTS 4 IN THEN REMOVES THE NEXT 3 INDEXES
           print_r($arr);
           $arr = array(1,2,3,4,5,6,7,8,9); //BECAUSE IT CHANGES THE ORIGINAL ARRAY I HAVE TO RESET $ARR
           array_splice($arr,4,3,array(10,11,12)); //GOES FROM FIRST INDEX AND COUNTS 4 IN THEN REMOVES THE NEXT 3 INDEXES AND REPLACES THEM WITH THE ARRAY, OR A SINGLE VALUE IF AN ARRAY IS NOT USED.
           print_r($arr);
           echo "</pre>";
            ?>

            <br><br>
            <?php
            echo "Splice Using Negative Ints: <br>";  
            echo "<pre class='no-background'>";
            $arr = array(1,2,3,4,5,6,7,8,9);
            print_r($arr); //SHOW ORIGINAL ARRAY
            array_splice($arr,-6); //GOES FROM THE END AND REMOVES 6 INDEXES
            print_r($arr);
            $arr = array(1,2,3,4,5,6,7,8,9); //BECAUSE IT CHANGES THE ORGINAL ARRAY I HAVE TO RESET $ARR
            array_splice($arr,-6,-3); //GOES FROM THE END IN 6 INDEXES, THEN GOES FROM THE END IN 3 INDEXES REMOVES THE INDEXES IN BETWEEN
            print_r($arr);
            $arr = array(1,2,3,4,5,6,7,8,9); //BECAUSE IT CHANGES THE ORGINAL ARRAY I HAVE TO  RESET $ARR
            array_splice($arr,-6,-3,array(10,11,12)); //GOES FROM THE END IN 6 INDEXES, THEN GOES FROM THE END IN 3 INDEXES REMOVES THE INDEXES IN BETWEEN AND REPLACES THEM WITH THE ARRAY.
            print_r($arr);
            echo "</pre>";

            ?>
            <br><br>

            <?php
            echo "Associative Arrays: <br>"; 
            //Uses index names instead of numbers. 
            $arr = array("fname"=>"scott","lname"=>"shaper");
            print_r($arr);
            echo "<br>";
            echo $arr['fname']; //OUTPUTS SCOTT
            ?>
            <br><br>

            <h2>CONVERTING ARRAYS</h2>
            <?php
            echo "Convert String to Array Using Explode Method: <br>"; 
            $str = "Programming in PHP is cool";
            $arr = explode(" ",$str);
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
            

            echo "Convert Array to String Using Implode Method: <br>"; 
            $arr = array("Programming","in","PHP","is","cool");
            $str = implode($arr); //BREAK ON EVERY COMMA AND CREATES ONE LONG STRING
            echo "$str<br />";
            $str = implode(" ",$arr); //BREAK ON EVERY COMMA AND INSERTS A SPACE
            echo "$str<br />";
            $str = implode("--",$arr); //BREAK ON EVERY COMMA AND INSERTS A "--"
            echo "$str<br />";

            ?>
            <br><br>

            <h2>SORTING ARRAYS</h2>
            <?php
                // Simplest: sort() and rsort() methods (alphabetically for letters, numerically for numbers, letters before numbers)
                //sort() sorts values in ascending order 
                // rsort() sorts in descending order 
                $authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens" );
                // DISPLAY "ARRAY ([0] => DICKENS [1] => KAFKA [2] => STEINBECK [3] => TOLKIEN)"
                sort($authors);
                print_r($authors);

                echo "<br>";

                // DISPLAY "ARRAY ([0] => TOLKIEN [1] => STEINBECK [2] => KAFKA [3] => DICKENS)"
                rsort( $authors);
                print_r($authors);

            ?>
            <br><br>
            
            <h2>SORTING ASSOCIATIVE ARRAYS</h2>
            <?php
            //Use asort() and arsort()
            $myBook = array( "title" => "Bleak House","author" => "Dickens","year" => 1853 );
            // DISPLAYS "ARRAY ( [TITLE] => BLEAK HOUSE [AUTHOR] => DICKENS [YEAR] =>1853 )"
            asort( $myBook );
            print_r( $myBook );

            echo "<br>";

            // DISPLAYS "ARRAY ( [YEAR] => 1853 [AUTHOR] => DICKENS [TITLE] =>  BLEAKHOUSE )"
            arsort( $myBook );
            print_r( $myBook );
            ?>
        </p>
    </body>
</html>