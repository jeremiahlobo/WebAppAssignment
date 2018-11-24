<?php include 'partials/header.php';
include 'partials/nav.php'; ?>
<!-- Page Content -->
<section>
    <div class="hero-image"></div>
</section>

<!-- <div class="container"> -->

  <div class="jumbotron jumbotron-fluid jumbo-design">
    <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-12 fluid-design">

          <h1 class="display-4">Welcome to Travel Experts</h1>
          <p class="lead">A affogato, shop, redeye dripper, medium et est
            americano aroma mug seasonal carajillo. Cortado iced pumpkin spice
            espresso, con panna, as, variety redeye foam, froth robust
            caramelization, ut body aroma percolator aged pumpkin spice
            dripper decaffeinated grounds milk. Instant body fair trade
            kopi-luwak decaffeinated cultivar carajillo affogato, cappuccino,
            coffee et, steamed, aged, saucer, mocha plunger pot, crema in arabica
            est id cream.
          </p>
        </div>

      <div class="col-lg-6 col-md-12 col-12 fluid-design">
        <?php
        //@credits https://stackoverflow.com/questions/470617/how-to-get-the-current-date-and-time-in-php
        //@credits https://stackoverflow.com/questions/2505681/timezone-conversion-in-php
        date_default_timezone_set('America/Edmonton');
        $datetime = new DateTime('G');
        $timezone = date_default_timezone_get();
        echo "<h5>The current timezone is " . $timezone."</h5>";
        $hour = $datetime->format('H');
        $timeNow = $datetime->format('d-m-Y H:i:s A')

        ?>
        <div class="card  card-captor text-whiter">
              <?php
              if ($hour >= 0 and $hour < 12)
              {
                print('<img class="card-img" src="images\clouds-hd-wallpaper-landscape-67832.jpg" alt="Card image">
              <h5 class="card-title">'.$timeNow.' Good Morning!</h5>');
              } elseif ($hour >= 12 and $hour < 18)
              {
                print('<img class="card-img" src="images\background-image-beautiful-blur-414586.jpg" alt="Card image">
                <div class="card-img-overlay">
                  <h5 class="card-title">'.$timeNow.' Good Afternoon!</h5>');
              } else
              {
                print('<img class="card-img" src="images\dawn-dusk-grass-86697.jpg" alt="Card image">
                <div class="card-img-overlay">
                  <h5 class="card-title">'.$timeNow.' Good Evening!</h5>');
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->


<div class="container" id="main-content">
  <div class="row">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="images/contact.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Register</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="images/houses.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Register</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="images/woman-swining.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Register</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="images/woman-swining.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Register</a>
      </div>
    </div>
  </div>
</div>
<?php include 'partials/footer.php' ?>
