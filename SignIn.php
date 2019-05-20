<!DOCTYPE html>
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM Customer WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: Home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
	<head>
		<title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
<body class="text-center">
    <div class="cover-containter"> 
      <header class="masthead mb-4">
        <div class="inner">
          <nav class="nav nav-masthead text-right bg-dark text-white">
            <h3 class="masthead-brand text-left">Sample Restraunt</h3>
            <a class="nav-item" href="Home.php">
              <span class="nav-link active text-muted" >Home</span>
            </a>
            <a class="nav-item active" href="menu.html">
                <span class="nav-link text-muted">Menu</span>
              </a>
              <a class="nav-item active" href="Reserve.php">
                  <span class="nav-link text-white">Reserves</span>
              </a>
              <a class="nav-item active" href="reviews.html">
                  <span class="nav-link text-muted">Reviews</span>
                </a>
          </nav>
      </div>
    </header>
      <main class="row">
        <div class="col-4"> </div>
        <form class="form-signin col-4" action="" method="post">
          <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="inputEmail" class="sr-only col">Email address</label>
          <input type="email" id="inputEmail" class="form-control" name="username" placeholder="Email address" required="" autofocus="">
          <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control"  name="password" placeholder="Password" required="">
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
          </form>
      </main>
  <footer class="mastfoot mt-auto fixed-bottom">
    <div class="inner">
      <p>Sample Restraunt using <a href="https://getbootstrap.com/">Bootstrap</a></p>
    </div>
  </footer>
</div>

</body>

</html>


  