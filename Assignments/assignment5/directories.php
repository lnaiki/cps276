<?php

class Directories{



	function createDirectory (){
        if (isset($_POST['submit'])){

            $newFolder = $_POST["folderName"];
            $fileContents = $_POST ["folderContent"];
            $folderPath = "directories/".$newFolder;
            $existingDirs = glob($folderPath);
            $message = "";
            $alreadyExists = FALSE;
            $mkDirSuccess = FALSE; 

            if (sizeOf($existingDirs) == 0){
                mkdir($folderPath ,0777, true);
                chmod($folderPath, 0777);
                $file = fopen ($folderPath."/readme.txt", "w") or die ("Cannot Open File"); 
                fwrite($file, $fileContents);
                fclose ($file);
                $mkDirSuccess = TRUE; 
                $message .= 'File and Directory were created <br> 
                <p> <a href="'. $folderPath . '/readme.txt">Path where file is located</a>'; 


            }
            else {
                $message .= "A directory already exists with that name. <br>";
            }

            return $message;

       }

       }

   
}



?>

