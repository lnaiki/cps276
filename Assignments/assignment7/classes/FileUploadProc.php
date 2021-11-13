<?php

require_once "Create_read.php";

class ProcessFile {

    private $error;
    private $fileSize;
    private $fileType;
    private $selectedFileName;
    private $enteredFileName;

    function buildFile() {

        $this->error = $_FILES["selectedFile"]["error"];
        $this->fileSize = $_FILES["selectedFile"]["size"];
        $this->fileType = $_FILES["selectedFile"]["type"];
        $this->selectedFileName = $_FILES["selectedFile"]["name"];
        $this->enteredFileName = $_POST["fileName"];
    }

    function processFile() {

        if ($this->error ==4){
            return "No file was uploaded. Make sure you choose a file to upload.";
        }
        
        else if ($this->fileSize > 100000 || $this->error == 1) {
            return "File is too big";
        }
        else if ($this->fileType != 'application/pdf'){
            return "File must be a pdf file.";
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

}

?>