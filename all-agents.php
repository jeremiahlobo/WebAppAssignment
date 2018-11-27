<?php
include 'php/variables.php';
include 'partials/header.php';
include 'controllers/allAgents.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php include 'partials/dashboard-nav.php';?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>

          <h2>All Agents</h2>
          <?php
            $allagents = getallAgents();
          ?>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">M.I</th>
                <th scope="col">Last</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Position</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach ($allagents as $key => $value): ?>
                <tr>
                  <th scope="row"><?=$key+1;?> </th>
                  <td><?=$value["AgtFirstName"]?></td>
                  <td><?=$value["AgtMiddleInitial"]?></td>
                  <td><?=$value["AgtLastName"]?></td>
                  <td><?=$value["AgtBusPhone"]?></td>
                  <td><?=$value["AgtEmail"]?></td>
                  <td><?=$value["AgtPosition"]?></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>


        </main>
      </div>
    </div>
<?php include 'partials/footer.php' ?>
