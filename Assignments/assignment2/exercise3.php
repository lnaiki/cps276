<?php

   $rows = 15; 
   $columns = 5; 
   $output = '';

   for ($i = 1; $i <= $rows; $i++){
    $output .= '<tr>';
        for ($j = 1; $j <= $columns; $j++){
            $output .= '<td> Row '. $i . ' Cell ' . $j . '</td>' ;
        }
        $output .= '</tr>';
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2.3</title>
</head>
<body>
    <table border = "1">
        <?php echo $output; ?>
    </table>
</body>
</html>

