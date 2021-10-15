<?php
//CREATING A FUNCTION CONTAINING A POTENTIAL EXCEPTION
function check_num($number) {
    if($number > 1) {
    throw new Exception("The value has to be 1 or lower");
    }
    echo "Number is 1 or less";
   }
//TRIGGERING THE EXCEPTION INSIDE A TRY()
try {
    check_num(2);
   }
//CATCHING THE EXCEPTION
catch(Exception $e) {
echo 'Message: ' .$e->getMessage();
}
?>