<!DOCTYPE html>
<?php
$currentpage = "Reserve";
include('session.php');
?>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body class="text-center">
  <?php
  include('header.php');
  ?>
  <main role="main" class="container">
    <div class="row">
      <h1 class="cover-heading mb-4">Reserve a Table</h1>
    </div>
    <form class="row">
      <label for="search-date" class="font-weight-bold mr-3">Date: </label>
      <input type="date" id="search-date" />
      <label for="search-time" class="font-weight-bold mr-3 ml-3"> Time: </label>
      <input type="time" id="search-time" min="7:00" max="20:00" value="17:00" step="1800" />
      <button type="submit" id="findTable" class="btn btn-primary btn-sm ml-3">Find a Table!</button>
    </form>
    <div class="row">
      <p class="lead">This Restraunts hours are 7:00 AM to 9:00 PM</p>
    </div>
    <div class="row">
      <h3 class="cover-heading mb-4">Reserve a Table</h3>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <card class="card">
          <div class="card-body">
            <h5 class="card-title">Table 1</h5>
            <p class="card-text">Seats: 4</p>
            <p class="card-text">Shape: standard</p>
            <button type="submit" class="btn btn-primary">Reserve</button>
          </div>
        </card>
      </div>
      <div class="col-md-4">
        <card class="card">
          <div class="card-body">
            <h5 class="card-title">Table 1</h5>
            <p class="card-text">Seats: 1</p>
            <p class="card-text">Shape: Bar</p>
            <button type="submit" class="btn btn-primary">Reserve</button>
          </div>
        </card>
      </div>
      <div class="col-md-4">
        <card class="card">
          <div class="card-body">
            <h5 class="card-title">Table 1</h5>
            <p class="card-text">Seats: 4</p>
            <p class="card-text">Shape: standard</p>
            <button type="submit" class="btn btn-primary">Reserve</button>
          </div>
        </card>
      </div>
    </div>
    <div class="row">
      <h3 class="cover-heading mb-4">My Reservations</h3>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <card class="card">
          <div class="card-body">
            <h5 class="card-title">Table 1</h5>
            <p class="card-text">Seats: 4</p>
            <p class="card-text">Shape: standard</p>
            <p class="card-text">Date: 01/01/01</p>
            <p class="card-text">Time: Never</p>
            <button type="submit" class="btn btn-warning">Cancel</button>
          </div>
        </card>
      </div>
    </div>

  </main>

  <footer class="mastfoot mt-auto fixed-bottom">
    <div class="inner">
      <p>Sample Restraunt using <a href="https://getbootstrap.com/">Bootstrap</a></p>
    </div>
  </footer>
  </div>

</body>

</html>