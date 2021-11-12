<?php
require_once "classes/Create_read.php"; 
$cr = new CreateRead();
$output = $cr-> getFiles();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>File List</title>
</head>
<body>
    <main class="container">
        <h1>List Files</h1>

        <?php
            echo "<a href='form.php'>Add file</a><br>";

            echo $output;
        ?>    

    </main>
</body>
</html>