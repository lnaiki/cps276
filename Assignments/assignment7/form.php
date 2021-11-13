<?php
require_once 'classes/FileUploadProc.php';
$processFile = new ProcessFile;

$output = "";

if (isset($_POST['submit'])){
  $processFile->buildFile();
  $output = $processFile->processFile();
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
      <h1>File Upload</h1>

        <?php
          echo "<a href='displayLinks.php'>Show File List</a>";;
          echo "<p> $output </p>";
        ?> 
    
    
        <form action="form.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="fileName">File Name</label><input type="text" class="form-control" name="fileName" id="fileName">
          </div>

          <div class="form-group">
          <label for="selectedFile"></label><input type="file"  name="selectedFile" id="selectedFile">
          </div>


          <div class="form-group">
          <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Upload File" >
          </div>
    
        </form>
    </main>
  </body>  
</html>
