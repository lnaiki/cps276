<?php

$path = "index.php?page=login";


    if ($_SESSION['status'] === "staff"){
        $nav .= <<<HTML
            <ul class="nav">
                <li class="nav-item"><a class="nav-link"  href="index.php?page=addContact">Add Contact Information</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a></li>
                <li class="nav-item"><a class="nav-link"  href="index.php?page=logout">Logout</a></li>
            </ul>
        HTML; 
    }

    elseif ($_SESSION['status'] === "admin") {
        $nav .= <<<HTML
            <ul class="nav">
                <li class="nav-item"><a class="nav-link"  href="index.php?page=addContact">Add Contact Information</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=addAdmin">Add Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=deleteAdmins">Delete Admin(s)</a></li>
                <li class="nav-item"><a class="nav-link"  href="index.php?page=logout">Logout</a></li>
            </ul>
        HTML;
    }

    else{
        $nav .= "ERROR";
    }


if(isset($_GET)){
    if($_GET['page'] === "addContact"){
        require_once('addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        require_once('deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "addAdmin"){
        require_once('addAdmin.php');
        $result = init();

    }

    else if($_GET['page'] === "deleteAdmins"){
        require_once('deleteAdmins.php');
        $result = init();

    }

    else if($_GET['page'] === "logout"){
        require_once('welcome.php');
        $result = init();

    }

    else {
        header('location: '.$path);
    }
}

else {
    header('location: '.$path);
}


public function security(){
    session_start();
    if($_SESSION['access'] !== "accessGranted"){
      header('location: index.php');
    }
  }

  ?>