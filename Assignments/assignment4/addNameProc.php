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
		$nameList = "";	

		if (isset($_POST['addName'])){
			$previousNames = $_POST["nameList"];
			$nameListArray = explode ("\n", $previousNames);
			array_push($nameListArray, $this->setName());
			sort($nameListArray);
			$nameList = implode ("\n", $nameListArray);
		}
		else{
			$nameList = "";
		}
		return $nameList;
	}
}



?>
