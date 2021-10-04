<?php
$firstName = "Bill";
$lastname = "Shaper";
$firstName = "Scott"; //Comments in PHP is same as C++ and Java with // or /*   */

$x = "5";
$y = 5;
$output = ""; 

if ($x == $y){
    $output = "x == y";
}
elseif ($x === $y){
    $output = "x === y";
}
else {
    $output = "x and y are neither equal nor identical.";
}



?>
<!--Block of php code seperate to organize-->
<!--This is a comment in HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics: Class Examples</title>

    <nav>
                <ul>
                    <li><a href="index.php">PHP Basics Home</a> </li>
                    <li><a href="arrays.php">Array Examples</a> </li>
                    <li><a href="class_examples.php">Class Examples</a> </li>
                    <li><a href="http://192.241.150.43/info.php">PHP info (Version 8.0.9)</a></li>
                </ul>
            </nav>
</head>
<body>
    <p>Hello Class! from <?php echo $firstName; echo $firstName .= $lastname; ?> </p>
    <br><br>

    <p>Output from vars x and y is : <?php echo $output ?></p>

<?php    
$str = "this is a string";
echo strlen($str);
echo "<br> ";
echo $str[strlen($str) -1 ]; //Echoes last letter in string $str (g)
?>

<?php
echo "<br> <br>"; 
//ASCII Comparisons: 

$x = "a";
$y = " Z";
$asciiOutput = "";
if (strtolower ($x)<strtolower($y)){
    $asciiOutput = $x." comes before ".$y;
}
else{
    $asciiOutput = $x. " comes after " .$y;
}
echo $asciiOutput;
?>
</body>
</html>