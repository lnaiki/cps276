<?php

class Validation{
	private $error = false;

	public function checkFormat($value, $regex)
	{
		switch($regex){
			case "name": return $this->name($value); break;
			case "address": return $this->address($value);break;
			case "city": return $this->city ($value); break;
			case "phone": return $this->phone($value); break;
			case "email": return $this->email($value); break;
			case "birthday": return $this->birthday($value);break;
		}
	}

	private function name($value){
		$match = preg_match('/[a-zA-Z-\s\']{1,50}/', $value);
		return $this->setError($match);
	}

	private function address($value){
		$match = preg_match('/\d+\s[a-zA-Z0-9]+/', $value);
		///\d+\s[a-zA-Z0-9]+\s[a-zA-Z0-9]*/
		return $this->setError($match);
	}

	private function city($value){
		$match = preg_match('/[a-zA-Z]/', $value);
		return $this->setError($match);
	}

	private function phone($value){
		$match = preg_match('/\d{3}\.\d{3}.\d{4}/', $value);
		return $this->setError($match);
	}

	private function email($value){
		$match = preg_match('/\w+\.*\w*@\w+\.*\w*/', $value);
		return $this->setError($match);
	}

	private function birthday($value){
		$match = preg_match('/\d{1,2}\/\d{1,2}\/\d{4}/', $value);
		return $this->setError($match);
	}

	
	private function setError($match){
		if(!$match){
			$this->error = true;
			return "error";
		}
		else {
			return "";
		}
	}


	/* THE SET MATCH FUNCTION ADDS THE KEY VALUE PAR OF THE STATUS TO THE ASSOCIATIVE ARRAY */
	public function checkErrors(){
		return $this->error;
	}
	
}

?>