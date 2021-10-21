<?php

$message = "";
$path = ""; 

if (count($_POST) > 0){
  require_once 'directories.php';
  $directories = new Directories; 
  $message .= $directories -> createDirectory();
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
      <h1>File and Directory Assignment</h1>
      <p>Enter a folder name and the contents of a file. Folder names should containe alpha numeric characters only.</p> 
      <p> <?php echo $message  ?> <p>
  
    
        <form action="form.php" method="post">

          <div class="form-group">
            <label for="folderName">Folder Name</label><input type="text" class="form-control" name="folderName" id="folderName">
          </div>

          <div class="form-group">
            <label for="folderContent">Folder Content</label><textarea style="height: 300px;" class="form-control" id="folderContent" name = "folderContent"> </textarea>
          </div>

          <div class="form-group">
          <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit" >
          </div>
    
        </form>
    </main>
  </body>  
</html>
