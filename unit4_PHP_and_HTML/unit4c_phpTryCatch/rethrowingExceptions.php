<?php
class custom_exception extends Exception {
    public function error_message() {
        //error message
        $error_msg = $this->getMessage().' Does not contain “example”.';
        return $error_msg;
    }
}

$email = "someonesomeoneexample.com";
try {
    try {
    //CHECKING FOR "EXAMPLE" IN MAIL ADDRESS
        if(strpos($email, "example") === FALSE) {
        //THROWING AN EXCEPTION IF EMAIL DOES NOT CONTAIN EXAMPLE
        throw new Exception($email);
        }
    }
    catch(Exception $e) {
        //RE-THROWING EXCEPTION
        throw new custom_exception($email);
    }
}
   catch (custom_exception $e) {
        //DISPLAY CUSTOM MESSAGE
        echo $e->error_message();
   }

?>
