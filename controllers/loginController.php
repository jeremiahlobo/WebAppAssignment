<?php
include_once('../core/User.php');
include '../core/functions.php';



if (Users::loggedin())
{
  header("Location: ../user-dashboard.php");
  exit();
}
$clean = [];
if (isset($_POST['btn-login']))
{
  if (ctype_alnum($_POST['uname']) || ctype_alpha($_POST['uname'])){
    $clean['username'] = htmlentities($_POST['uname'], ENT_QUOTES, 'UTF-8');
    $clean['password'] = htmlentities($_POST['upass'], ENT_QUOTES, 'UTF-8');

    $userlogin = new Users($app['config']['database']);
    if ($userlogin->verifylogin($clean)){
      session_start();
      $_SESSION['username'] = $clean['username'];
      header("Location: ../user-register.php");
    }else{
      $error['message'] = 'please check your username and password';
      header("Location: ../user-register.php");
    }
  }else{
    $error['message'] = 'please check your username and password no special characters are allowed!';
    header("Location: ../user-register.php");
    exit();
  }
}else{
  header("Location: ../user-register.php");
}
