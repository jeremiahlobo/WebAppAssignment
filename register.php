<?php
include 'partials/routes.php';
include 'partials/header.php';
include 'partials/nav.php'; ?>
    <!-- Page Content -->
    <section>
        <div class="hero-image"></div>
    </section>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Registration</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
    <div class="container">
  <div class="row">
    <div class="col-md-6">
    <h3 class="display-4">Why Register?</h3>
      <p>Whipped, cultivar americano spoon coffee, kopi-luwak, crema trifecta café
      au lait qui sugar arabica. Aroma, grounds, latte caramelization organic
      extraction bar pumpkin spice skinny. Aromatic mazagran, caffeine, medium,
      espresso cream, robust robusta affogato foam saucer medium. Skinny coffee
      viennese est french press, single shot, trifecta kopi-luwak filter id to
      go percolator.
      </p>
    </div>

    <div class="col-md-6 icons text-center">
      <div class="row">
        <div class="icon-register col-md-4 col-sm-4"></div>
        <div data-icon="&#xe010;" class="icon-register col-md-4 col-sm-4"></div>
        <div class="icon=register col-md-4 col-sm-4"></div>
      </div>

      <div class="row">
        <div class="col-4"></div>
        <div data-icon="&#xe04c;" class="icon-register col-4"></div>
        <div class="col-4"></div>
      </div>

      <div class="row">
        <div class="col-4">
          <span data-icon="k" class="icon-register rotate-right-45"></span>
        </div>
        <div class="col-4">
          <span data-icon="k" class="icon-register"></span>
        </div>
        <div class="col-4">
          <span data-icon="k" class="icon-register rotate-left-45"></span>
        </div>
    </div>

      <div class="row">
        <div data-icon="#" class="icon-register col-4"></div>
        <div data-icon="%" class="icon-register col-4"></div>
        <div data-icon="$" class="icon-register col-4"></div>
      </div>

    </div>
  </div>
</div>

  <div class="container">
  <form id="signupForm">
    <!-- We have to set the method and action to the php file-->
    <h3 class="display-4">Customer Registration</h3>
    <div class="form-row">
      <div class="form-group col-6">
        <label for="cust-name">First Name</label>
        <input type="text" class="form-control" id="cust-name" name="custname" placeholder="Frist Name">
      </div>
      <div class="form-group col-6">
        <label for="cust-last-name">Last Name</label>
        <input type="text" class="form-control" id="cust-last-name" name="custlastname" placeholder="Last Name">
      </div>
    </div>

   <div class="form-row">
     <div class="form-group col-6">
       <label for="cust-email">Email</label>
       <input type="email" class="form-control" id="cust-email" name="custemail" placeholder="Email">
     </div>
     <div class="form-group col-6">
       <label for="cust-password">Password</label>
       <input type="password" class="form-control" id="cust-password" name="custpassword" placeholder="Password"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
     </div>
   </div>
   <div class="form-group">
     <label for="cust-address">Address</label>
     <input type="text" class="form-control" id="cust-address" name="custaddress" placeholder="1234 Main St">
   </div>
   <div class="form-row">
     <div class="form-group col-sm-4 col-md-6">
       <label for="cust-city">City</label>
       <input type="text" class="form-control" id="cust-city" name="custcity">
     </div>
     <div class="form-group col-sm-4 col-md-4">
       <label for="cust-state">State</label>
       <select id="cust-state" class="form-control" name="custstate">
         <option selected>Choose...</option>
         <option value="AB">AB</option>
       </select>
     </div>
     <div class="form-group col-sm-4 col-md-2">
       <label for="cust-postal-ca">Postal Code</label>
       <input type="text" class="form-control" id="cust-postal-ca" name="custpostalcode">
     </div>
   </div>
   <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <!-- end form -->
<?php include 'partials/footer.php' ?>
