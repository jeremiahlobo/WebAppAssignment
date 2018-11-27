<?php
include 'php/variables.php';
include 'partials/header.php';
include 'controllers/allCustomers.php';
?>
    <div class="container-fluid">
      <div class="row">
        <?php include 'partials/dashboard-nav.php';?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>

          <h2>All Customers</h2>
          <?php
            $allcustomers = getallCustomers();
          ?>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Province</th>
                <th scope="col">Home Phone</th>
                <th scope="col">Bussiness Phone</th>
                <th scope="col">Email</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach ($allcustomers as $key => $value): ?>
                <tr>
                  <th scope="row"><?=$key+1;?> </th>
                  <td><?=$value["CustFirstName"]?></td>
                  <td><?=$value["CustLastName"]?></td>
                  <td><?=$value["CustAddress"]?></td>
                  <td><?=$value["CustCity"]?></td>
                  <td><?=$value["CustProv"]?></td>
                  <td><?=$value["CustHomePhone"]?></td>
                  <td><?=$value["CustBusPhone"]?></td>
                  <td><?=$value["CustEmail"]?></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>


        </main>
      </div>
    </div>
<?php include 'partials/footer.php' ?>
