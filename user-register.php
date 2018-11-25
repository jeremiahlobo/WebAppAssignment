<?php
include 'php/variables.php';
include 'partials/header.php';
?>
  </head>
<div class="container login-container text-center">
    <form class="form-signin">
      <a href="index.php"> <img class="mb-4" src="images/logo/tr-color.png" alt="" width="200" height="200"></a>
      <h1 class="h3 mb-3 font-weight-normal">Register</h1>
      <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" class="form-control" placeholder=" Enter your username" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <p>Have a login? <a href="register.php"> Login here</a> </p>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
    </form>
  </div>
