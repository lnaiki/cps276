<?php
require_once "Create_read.php";

class FileList{ 
    function createList(){

    $cr = new CreateRead();
        return $cr->getFiles();  
    }
}

?>