<?php

$output = "";

if (count($_POST) > 0){
  require_once 'addNameProc.php';
  $addName = new AddNamesProc; 
  $output = $addName->addClearNames();
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

    <title>Form</title>
  </head>
  <body>
    <main class="container">
      <h1>Add Names</h1>
        <form action="form.php" method="post">

          <div class="form-group">
          <input type="submit" class="btn btn-primary" name="addName" id="submitButton" value="Add Name" >
          <input type="submit" class="btn btn-primary" name="clearNames" id="submitButton" value="Clear Names" >

          </div>

          <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          

          <div class="form-group">
            <label for="nameList">List of Names</label>
            <textarea  style="height: 500px;" class="form-control" id="nameList" name = "nameList"> 
                <?php echo $output ?> 
            </textarea>
          </div>

    
        </form>
    </main>
  </body>  
</html>
