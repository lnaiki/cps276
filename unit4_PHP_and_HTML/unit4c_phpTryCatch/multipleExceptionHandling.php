<?php
class custom_exception extends Exception {
    public function error_message() {
        //defining the error message
        $error_msg = 'Error caught on line '.$this->getLine()."\n in ".$this->getFile()."\n: ".$this->getMessage()."\n is no valid E-Mail address";
        return $error_msg;
    }
}
   $email = "someonesome@one.com";
   try {
    //check if
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throwing an exception in case email is not valid
    throw new custom_exception($email);
    }
    //checking for "example" in mail address
    if(strpos($email, "example") !== FALSE) {
        throw new Exception("$email contains example'");
        }
        else {
        throw new Exception("$email does not contain the word example");
        }
       }
       catch (custom_exception $e) {
        echo $e->error_message();
       }
       catch(Exception $e) {
        echo $e->getMessage();
       }
?>
