<?php
include 'php/variables.php';
include 'partials/header.php';
// include'controllers/RegisterController.php';
session_start();
?>

  </head>
<div class="container login-container text-center">

    <form class="form-signin" method="post" action="controllers/registerController.php">
      <a href="index.php"> <img class="mb-4" src="images/logo/tr-color.png" alt="" width="200" height="200"></a>
      <h1 class="h3 mb-3 font-weight-normal">Register</h1>
      <?php if (isset($_SESSION['success'])){ ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php printf($_SESSION['success'])?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php }else {
      echo '';
    }?>
      <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder=" Enter your username" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" name="useremail" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="userpass" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block btn-agent" name="user-register" type="submit">Sign up</button>
      <p>Have a login? <a href="register.php"> Login here</a> </p>
    </form>

  </div>

  <?php require("partials/footer.php");?>
