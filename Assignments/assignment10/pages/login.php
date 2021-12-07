<?php

$output = "";

function init(){

  if (isset($_POST['login'])){
    require_once "classes/Pdo_methods.php";
    $pdo = new PdoMethods(); 
    $sql = "SELECT email, password FROM admins WHERE email = :email";

    $bindings = array(
        array(':email', $_POST['email'],'str')
    );

    $records = $pdo->selectBinded($sql,$bindings);

    if ($records == 'error'){
        $output .= "There was an error logging in";
    }
    else{
        if (count($records) !=0){
            if (($_POST['password'] == $records[0]['password'])){
                session_start(); 
                $_SESSION['access'] = 'accessGranted';
                $_SESSION['email'] = $_POST['email'];   
                $_SESSION['name'] = getName($_POST['email']);
                $_SESSION['status'] = getStatus($_POST['email']);
                $output .= 'success';
            }
            else{
                $output .= 'There was a problem logging in with those credentials'; 
            }
        }
        else{
            $output .= 'There was a problem logging in with those credentials';
        }
    }
    if ($output === 'success'){
      header ('Location: index.php?page=welcome');
    } 
}
  
$form = <<<HTML
      <form action="index.php?page=login" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="sshaper@test.com">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="submit" class="btn btn-primary" name="login" value="Login">
          </div>
        </div>
      </div>
      </form>
HTML;

return ["<h1>Login</h1><br>", $form];

}


function getName($email){

  $pdo = new PdoMethods(); 
  $sql = "SELECT name FROM admins WHERE email = '$email' ";
  $records = $pdo -> selectNotBinded($sql);
  if ($records == 'error'){
      return "There has been an error processing your request.";
  }
  else {
      if (count ($records) != 0){
          return $this;
      }
      else {
          return "No one found by that email address"; 
      }
  }  
} 

function getStatus($email){
  $pdo = new PdoMethods(); 
  $sql = "SELECT status FROM admins WHERE email = '$email' ";
  $records = $pdo -> selectNotBinded($sql);
  if ($records == 'error'){
      return "There has been an error processing your request.";
  }
  else {
      if (count ($records) != 0){
          return $this;
      }
      else {
          return "No one found by that email address"; 
      }
  }  
}
?>