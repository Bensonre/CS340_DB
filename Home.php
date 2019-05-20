<!DOCTYPE html>
<?php
   $currentpage="home";
   include('session.php');
?>
<html>
	<head>
		<title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
<body class="text-center text-white bg-dark">
    <div class="cover-containter"> 
      <header class="masthead mb-auto">
        <div class="inner">
          <nav class="nav nav-masthead text-left justify-content-center">
            <h3 class="masthead-brand text-left">Sample Restraunt</h3>
            <a href="#" class="nav-item active">
              <span class="nav-link active text-white" href="Home.php">Home</span>
        </a>
        <a class="nav-link text-muted" href="menu.php">Menu</a>
        <a class="nav-link text-muted" href="Reserve.php">Reserves</a>
        <a class="nav-link text-muted" href="reviews.php">Reviews</a>
      </nav>
    </div>
  </header>
  <main role="main" class="inner vh-100 d-flex justify-content-center align-items-center">
    <div>
      <h1 class="cover-heading">Fake Restraunt</h1>
      <p class="lead">This is a Sample site for Restraunts</p>
      <p class="lead">This Restraunts hours are 7:00 AM  to 9:00 PM</p>
      <p class="lead">
        <a href="#" class="btn btn-lg btn-secondary">Menu</a>
      </p>
    </div>
  </main>
  
  <footer class="mastfoot mt-auto fixed-bottom">
    <div class="inner">
      <p>Cover template With <a href="https://getbootstrap.com/">Bootstrap</a>, </p>
    </div>
  </footer>
</div>

</body>

</html>


  
