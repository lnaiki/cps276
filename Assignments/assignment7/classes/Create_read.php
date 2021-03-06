<?php
require_once "Pdo_methods.php";


class CreateRead extends PdoMethods{
  
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


    public function getFiles() {
        $pdo = new PdoMethods();
        
        $sql = "SELECT DISTINCT entered_file_name, file_path FROM files ORDER BY entered_file_name";

        $records = $pdo->selectNotBinded($sql);

        if ($records == 'error'){
            return "There has been an error processing your request"; 
        }
        else {
            if(count($records)!=0){
                    return $this->createList($records);
                
            }
            else {
                return "No files found. ";
            } 
        }
    }

    public function addFile(){
        $pdo = new PdoMethods();

        $sql = "INSERT INTO files (file_name, file_path, entered_file_name) VALUES (:fname, :fpath, :enteredname)";

        $bindings = [
            [':fname',$_FILES["selectedFile"]["name"],'str'],
            [':fpath',"files/".$_FILES["selectedFile"]["name"],'str'],
            [':enteredname',$_POST['fileName'],'str']
            ];

        $result = $pdo->otherBinded($sql, $bindings);

        if($result === 'error'){
            return 'There was an error adding the file';
            }
            else {
            return "File has been added.";
            }
    }

    private function createList($records){
        $list = '<ul>';
         foreach ($records as $row){
            $list .= "<li><a target='_blank' href={$row['file_path']}>{$row['entered_file_name']}</li>";
        }
        $list .= '</ul>';
        return $list;
    }

}

