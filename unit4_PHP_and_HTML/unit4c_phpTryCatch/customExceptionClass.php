<?php
class custom_exception extends Exception {
    public function error_message() {
        //defining the error message
        $error_msg = 'Error caught on line '.$this->getLine()."\n in ".$this->getFile()."\n: ".$this->getMessage()."\n is not a valid E-Mail address";
        return $error_msg;
    }
   }
   $email = "someonesomeone@example.com";
   try {
    //checking if
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throwing an exception in case email is not valid
    throw new custom_exception($email);
    }
    else {
    echo "The email is valid";
    }
   }
   catch (custom_exception $e) {
    //DISPLAYING A CUSTOM MESSAGE
    echo $e->error_message();
   }

?>