<?php

session_start(); 
if ($_SESSION ['access'] !== "accessGranted"){
    header ('Location: login.php')
    
}

function init(){
    return ["<h1>Welcome</h1>","<p>Welcome " . '$_SESSION['name']' </p>"];

    }
}

?>