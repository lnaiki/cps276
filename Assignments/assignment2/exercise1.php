<?php      
         
    $x = 4;
    $y = 5;
        
    $output = "";
    for ($i = 1; $i <= $x; $i++){
        $output.= '<li>'.$i . '</li> <ul>' ;
            for ($j = 1; $j <= $y; $j++){
            $output .= '<li>' . $j . '</li>';
            }
    $output .= '</ul>';
    }
        
              
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2.1</title>
</head>
<body>

        <ul>
        <?php echo $output?>
        </ul>

</body>
</html>