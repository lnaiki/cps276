<?php

echo preg_match("/world/", "Hello world!");
    //Does world show up in string Hello world! ? 
    //If true, returns 1

echo preg_match("/^world/", "Hello world!");
    //Does the string start with the word world? 
    // False so returns 0

if ( preg_match("/^world/", "Hello world!")==-){
    echo "match ";
}
else {
    echo "no match";
}


//To access the text that was matched, pass an array variable as the third argument:
$string = "Hello world"
echo preg_match("/world/", $string, $match);
    echo $match[0];

//preg_match_all() looks for all matches in the string

?>