<?php
require_once 'routes.php';
require_once 'addAdmin.php';
$output = "";
$email = $_POST['email'];
$name = getName($email);
$status = getStatus($email);


if (isset($_POST['login'])){

    $pdo = PdoMethods(); 
    $sql = "SELECT email, password FROM admin WHERE email = :email";

    $bindings = array(
        array(':email', $email,'str')
    );

    $records = $pdo->selectBinded($sql,$bindings);

    /**If there was a return error string */
    if ($records == 'error'){
        $output .= "There was an error logging in";
    }

    else{
        if (count($records) !=0){
            if (password_verify($post['password'], $records[0]['password'])){
                session_start(); 
                $_SESSION['access'] = "accessGranted";
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['status'] = $status;
                $output .= "success";
            }
            else{
                $output .= "There was a problem logging in with those credentials"; 
            }
        }
        else{
            $output .= "There was a problem logging in with those credentials";
        }
    }
}

if ($output === 'success'){
    header ('Location: welcome.php');
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


  <body>
    <div class="container">
      <h1>Login</h1>
      
      <form action="index.php" method="post">
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



    </div>

  </body>
</html>