<?php
include 'php/variables.php';
include 'partials/header.php';
// include'controllers/RegisterController.php';
session_start();
?>
  </head>
<div class="container login-container text-center">
    <form class="form-signin" method="post" action="controllers/LoginController.php">
      <a href="index.php"> <img class="mb-4" src="images/logo/tr-color.png" alt="" width="200" height="200"></a>
      <h1 class="h3 mb-3 font-weight-normal">Administrator sign in</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>


          <p>Don't have a login, <a href="user-register.php"> Register Now!</a> </p>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
  </div>
