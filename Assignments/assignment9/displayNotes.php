<?php

  require_once 'classes/Create_Read.php';
  $cr = new CreateRead();
  $output = "";

  If (isset($_POST['submit'])){
    date_default_timezone_set('America/Detroit');
    $begTimeStamp= strtotime($_POST['begDate']);
    $endTimeStamp= strtotime($_POST['endDate']);
    $output .= $cr->getNotes($begTimeStamp, $endTimeStamp);
  }



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Display Notes</title>
  </head>
  <body>
    <main class="container">
      <h1>Display Notes</h1>
 
        <form action="displayNotes.php" method="post" enctype="multipart/form-data">

          <div class="form-group"> 
            <?php
              echo "<a href='index.php'>Add Note</a><br>";
            ?> 
          </div>

          <div class="form-group">  
            <label for="begDate">Beginning Date</label>
            <input type="date" class="form-control" id="begDate" name="begDate">
          

          <div class="form-group"> 
            <label for="endDate">Ending Date</label>
            <input type="date" class="form-control" id="endDate" name="endDate">
          </div>

          <div class="form-group">
              <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Get Note" >
            </div>

        </form>

        <?php
          echo $output;
        ?>



    </main>
  </body>  
</html>
