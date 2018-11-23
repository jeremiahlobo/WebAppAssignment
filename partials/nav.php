<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/logo/TravelExperts.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php ($CURRENT_PAGE == "Index")? print('active') : '';?>">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item <?php ($CURRENT_PAGE == "Register")? print('active') : '';?>">
          <a class="nav-link" href="register.php">Register </a>
        </li>
        <li class="nav-item <?php ($CURRENT_PAGE == "Contact")? print('active') : '';?>">
          <a class="nav-link"  href="contact.php">Contact </a>
        </li>
        <li class="nav-item <?php ($CURRENT_PAGE == "JavaScript")? print('active') : '';?>">
          <a class="nav-link"  href="javascript.php"> Javascript</a>
        </li>
        <li class="nav-item <?php ($CURRENT_PAGE == "PHP")? print('active') : '';?>">
          <a class="nav-link"  href="PHP.php">More PHP </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
