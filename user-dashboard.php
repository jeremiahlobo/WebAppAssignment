<?php
include 'php/variables.php';
include 'partials/header.php';
?>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <h2>Agent Registration</h2>
          <form  id="contact-form" method="post" action="#">
              <div class="form-row">
                <div class="form-group col-4">
                  <label for="cust-name">First Name</label>
                  <input type="text" class="form-control" id="contact-name"
                  name="contactname" placeholder="Frist Name">
                </div>
                <div class="form-group col-4">
                  <label for="cust-last-name">Middle Intials</label>
                  <input type="text" class="form-control" id="contact-last-name"
                  name="contactlastname" placeholder="Last Name">
                </div>
                <div class="form-group col-4">
                  <label for="cust-last-name">Last Name</label>
                  <input type="text" class="form-control" id="contact-last-name"
                  name="contactlastname" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <label for="contact-email">Email</label>
                <input type="email" class="form-control" id="contact-email"
                name="contactemail" placeholder="name@example.com">
              </div>
              
                <button type="submit" class="btn btn-primary" id="contact-form-submit">Sign in</button>
                <button type="reset" class="btn btn-primary" id="contact-form-reset">Reset</button>
            </form>
        </main>
      </div>
    </div>
<?php include 'partials/footer.php' ?>
