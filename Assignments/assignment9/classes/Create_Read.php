<?php
    require_once 'Pdo_methods.php';


    class CreateRead extends PdoMethods{

        
        public function addNote(){
            $pdo = new PdoMethods(); 

            date_default_timezone_set('America/Detroit');
            $timestamp = strtotime($_POST['dateTime']); 

            $sql = "INSERT INTO notes (time_stamp, note) VALUES (:tstamp, :note)";

            $bindings = [
                [':tstamp', $timestamp,'int'],
                [':note', $_POST['note'],'str']
            ];

            $result = $pdo->otherBinded($sql, $bindings); 

            if ($result === 'error'){
                return 'There was an error adding the note';
            }
            else {
                return 'Note has been added';
            }

        }

        public function getNotes($begTimeStamp, $endTimeStamp){
            $pdo = new PdoMethods(); 

            $sql = "SELECT time_stamp, note FROM notes WHERE time_stamp BETWEEN'$begTimeStamp' AND '$endTimeStamp' ";

            $records = $pdo->selectNotBinded($sql);

            if ($records == 'error'){
                return "There has been an error processing your request.";
            }
            else {
                if (count ($records) != 0){
                    return $this->createTable($records);
                }
                else {
                    return "No notes found for the date range selected.";
                }
            }
        }   
                



    private function createTable($records){
        $table = '<table class = "table table-striped">';
            $table .= '<thead> <tr>';
                $table .= '<th scope="col">Date and Time</th>';
                $table .= '<th scope="col">Note</th>';
            $table .= '</tr> </thead>';
            $table .= '<tbody>';
                foreach ($records as $row){
                    $timeStamp = $row['time_stamp'];
                    $stringDateTime = date('n/d/Y h:i a', $timeStamp);
                    $note = $row['note'];

                    $table .= '<tr>';
                    $table .= '<td>' . $stringDateTime . '</td>';
                    $table .= '<td>' . $note . '</td>';
                    $table.= '</tr>';
                }
            $table .= '</tbody>';

         return $table;
    }
    
}  
?>