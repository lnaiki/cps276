<?php

$path = "index.php?page=login";
$nav = "";


$adminNav = <<<HTML
    <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="index.php?page=addContact">Add Contact Information</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=addAdmin">Add Admin</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=deleteAdmins">Delete Admin(s)</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=logout">Logout</a></li>
  </ul> 
HTML;


$staffNav = <<<HTML
    <ul class="nav"> 
       <li class="nav-item"><a class="nav-link"  href="index.php?page=addContact">Add Contact Information</a></li>
       <li class="nav-item"><a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a></li>
       <li class="nav-item"><a class="nav-link"  href="index.php?page=logout">Logout</a></li> 
   </ul> 
HTML;


function security() {
    session_start();
    if($_SESSION['access'] !== 'accessGranted') {
        header('location: ' .$path);
    }
    else{
        if ($_SESSION['status'] == 'admin'){
            $nav .= $adminNav;
        }
//        else{
//            $nav .= $staffNav;
//        }
    }
}

function admin(){


}


if(isset($_GET)){
    if($_GET['page'] === 'addContact'){
        security();
        require_once('pages/addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        security();
        require_once('pages/deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "addAdmin"){
        security();
        admin();
        require_once('pages/addAdmin.php');
        $result = init();
    }

    else if($_GET['page'] === "pages/deleteAdmins"){
        security();
        admin();
        require_once('deleteAdmins.php');
        $result = init();
    }

    else if ($_GET['page'] === "welcome"){
        security();
        require_once('pages/welcome.php');
        $result = init($_SESSION['name']);
    }

    else if($_GET['page'] ==="login"){
        require_once('pages/login.php');
        $nav = "";
        $result = init();
    }


    else {
        header('location: '.$path);
    }
}

else {
    header('location: '.$path);
}


?>