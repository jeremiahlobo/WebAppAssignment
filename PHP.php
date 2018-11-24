<?php
include 'php/variables.php';
include 'partials/header.php';
include 'partials/nav.php';
?>
<!-- Page Content -->
  <section>
      <div class="hero-image"></div>
  </section>’

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Having fun with PHP</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h2 class="display-3"> Links </h2>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Description</th>
              <th scope="col">Links</th>
          </tr>
        </thead>
        <tbody>

      <?php

      foreach ($url_links as $key => $value) {
        echo '<tr>';
        echo '<td>'.ucfirst($key).'</td>';
        echo '<td><a href="'.$value.'" target="_blank">'.$value.'</a></td>';
        echo '</tr>';
        }
      ?>
    </tbody>
  </table>
    </div>
  </div>
<?php include 'partials/footer.php' ?>
