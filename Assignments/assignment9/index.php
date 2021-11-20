<?php

  require_once 'classes/Create_Read.php';
  $cr = new CreateRead();
  $output = "";

  If (isset($_POST['submit'])){
    date_default_timezone_set('America/Detroit');

    if (strlen( ($_POST ['dateTime']) == 0)){
      $output .= "Please enter a valid date and time";
    }
    elseif (strlen($_POST['note']) == 0 ){
      $output .= "Please enter a note. ";
    }
    else {
      $output = $cr->addNote();
    }
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

    <title>Add Notes</title>
  </head>
  <body>
    <main class="container">

      <h1>Add Note</h1>
  
        <form action="index.php" method="post" enctype="multipart/form-data">

            <div class="form-group"> 
              <?php
                echo "<a href='displayNotes.php'>Display Notes</a><br>";
                echo $output;
              ?>  
            </div>

            <div class="form-group">  
              <label for="dateTime">Date and Time</label>
              <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">
            </div>

            <div class="form-group">
              <label for="note">Note</label>
              <textarea class="form-control" id="note" name="note" rows="12"></textarea>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Add Note" >
            </div>
    
        </form>
    </main>
  </body>  
</html>
