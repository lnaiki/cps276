<?php

class AddNamesProc{

	

	function setName (){
		$name = $_POST["name"]; 
		$splitName = explode(" ", $name);
		$formatName = array("lname"=>$splitName[1], "fname"=>$splitName[0]); 
		$formattedName = implode(", ", $formatName);
		return $formattedName;
	}

	function addClearNames(){

		$nameListArray = [];
		
		if (isset($_POST['addName'])){
			array_push($nameListArray, $this->setName());
			$nameList = implode ("/n", $nameListArray);
		}
		else{
			$nameList = "";
		}
		return $nameList;
	}
}



?>
