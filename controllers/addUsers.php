<?php
 include ('../core/User.php');
 include '../core/functions.php';

// $userlogin = new Users($app['config']['database'],'user123', 'email@email.com');
// $testConn = new User();var_dump($userlogin);
// if (Users::loggedin())
// {
//   redirect('dashboard');
//   exit();
// }
$clean = [];
if (isset($_POST['btn-register'])){
  if (ctype_alnum($_POST['uname']) || ctype_alpha($_POST['uname'])){
    $clean['username'] = htmlentities($_POST['uname'], ENT_QUOTES, 'UTF-8');
    $clean['email'] = htmlentities($_POST['umail'], ENT_QUOTES, 'UTF-8');
    $clean['password'] = htmlentities($_POST['upass'], ENT_QUOTES, 'UTF-8');
    $userregister = new Users($app['config']['database']);
    if ($userregister->register($clean)){
      require 'views/login.php';
    }else{
      $error['message'] = '';
      redirect('/');
      require 'views/register.php';
    }
  }else{
      $error['message'] = 'please check your username and password no special characters are allowed!';
      require 'views/register.php';
      exit();
  }
}else{
  $title = 'register';
  require 'views/register.php';
}
