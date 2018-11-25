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
                  All Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  All Agents
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>

          <h2>Agent Registration</h2>
          <form  id="contact-form" method="post" action="#">
              <div class="form-row">
                <div class="form-group col-4">
                  <label for="first-name">First Name</label>
                  <input type="text" class="form-control" id="first-name"
                  name="firstname" placeholder="Frist Name">
                </div>
                <div class="form-group col-4">
                  <label for="middle-intial">Middle Intials</label>
                  <input type="text" class="form-control" id="middle-intial"
                  name="middleintial" placeholder="Middle Intial">
                </div>
                <div class="form-group col-4">
                  <label for="agent-last-name">Last Name</label>
                  <input type="text" class="form-control" id="agent-last-name"
                  name="agentlastname" placeholder="Last Name">
                </div>
              </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="agent-email">Email</label>
                    <input type="email" class="form-control" id="agent-email"
                    name="agentemail" placeholder="name@example.com">
                  </div>

                  <div class="form-group col-6">
                    <label for="bus-phone">Phone</label>
                    <input type="email" class="form-control" id="bus-phone"
                    name="busphone" maxlength="9" placeholder="(403) 123-1424">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-4 col-md-4">
                    <label for="agent-level">Agent Level</label>
                    <select id="agent-level" class="form-control" name="typeagent">
                      <option selected>Choose...</option>
                      <option value="Junior">Junior Agent</option>
                      <option value="Senior Agent">Senior Agent </option>
                      <option value="Intermediate Agent">Intermediate Agent </option>
                    </select>
                  </div>
                </div>
              <button type="submit" class="btn btn-primary" id="contact-form-submit">Sign in</button>
              <button type="reset" class="btn btn-primary" id="contact-form-reset">Reset</button>
            </form>
        </main>
      </div>
    </div>
<?php include 'partials/footer.php' ?>
