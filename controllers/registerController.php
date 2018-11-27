<?php
 include ('../core/User.php');
 include '../core/functions.php';
session_start();
// $userlogin = new Users($app['config']['database'],'user123', 'email@email.com');
$email = $_POST['useremail'];
$clean = [];
if (isset($_POST['user-register']) && (filter_var($email, FILTER_VALIDATE_EMAIL))){
  if ( ctype_alnum($_POST['username'])  ){
    $clean['username'] = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
    $clean['email'] = htmlentities($_POST['useremail'], ENT_QUOTES, 'UTF-8');
    $clean['password'] = htmlentities($_POST['userpass'], ENT_QUOTES, 'UTF-8');
    $userregister = new Users($app['config']['database'], $clean['username'], $clean['email'] );
    if ($userregister->register($clean)){
        $_SESSION["success"]= 'You have succesfully been added to the DB';
        header("Location: ../user-register.php");
    }else{
      $_SESSION["error"] = 'something went wrong';
      header("Location: ../user-register.php");

    }
  }else{
      header("Location: ../user-login.php");
      exit();
  }
}
