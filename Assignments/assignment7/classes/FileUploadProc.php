<?php

require_once "Create_read.php";

class ProcessFile {

    private $fileSize;
    private $fileType;
    private $selectedFileName;
    private $enteredFileName;

    function buildFile() {
        $this->fileSize = $_FILES["selectedFile"]["size"];
        $this->fileType = $_FILES["selectedFile"]["type"];
        $this->selectedFileName = $_FILES["selectedFile"]["name"];
        $this->enteredFileName = $_POST['fileName'];
    }

    function checkFile(){
        if ($this->fileSize > 100000){
            return "File is too big";
        }
        else if($this->fileType != "application/pdf"){
            return "File must be a pdf file";
        }
        else{
            $this->addFile();
            return "File has been added";
        }

    }

    function addFile(){
            $cr = new CreateRead();
            return $cr->addFile();
        }
        else{
            return "There was a problem uploading your file. Please try again.";
        }
    }

}

?>