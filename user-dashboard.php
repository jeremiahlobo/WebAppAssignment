<?php
include 'php/variables.php';
include 'partials/header.php';
session_start();
?>

    <div class="container">
      <div class="row">
        <?php include 'partials/dashboard-nav.php';?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>

          <h2>Agent Registration</h2>
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
          <form  id="contact-form" method="post" action="controllers/registerAgents.php">
              <div class="form-row">
                <div class="form-group col-4">
                  <label for="first-name">First Name</label>
                  <input type="text" class="form-control" id="first-name"
                  name="agentfirstname" placeholder="Frist Name">
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
                    <label for="bus-phone">Business Phone</label>
                    <input type="text" class="form-control" id="bus-phone"
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
                  <div class="form-group col-sm-4 col-md-4">
                    <label for="agencyId">Agency</label>
                    <select id="agencyId" class="form-control" name="agencyId">
                      <option selected>Choose...</option>
                      <option value="1">1155 8th Ave SW, Calgary</option>
                      <option value="2">110 Main Street, Okotoks </option>
                    </select>
                  </div>
                </div>
              <button type="submit" class="btn btn-primary" name="add-agent" id="contact-form-submit">Add Agent</button>
              <button type="reset" class="btn btn-primary" id="contact-form-reset">Reset</button>
            </form>
        </main>
      </div>
    </div>
<?php include 'partials/footer.php' ?>
