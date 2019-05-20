<!DOCTYPE html>
<?php
		$currentpage="menu";
    include('session.php');
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
                <span class="nav-link text-white">Menu</span>
              </a>
              <a class="nav-item active" href="Reserve.php">
                  <span class="nav-link text-muted">Reserves</span>
              </a>
              <a class="nav-item active" href="reviews.html">
                  <span class="nav-link text-muted">Reviews</span>
              </a>  
          </nav>
      </div>
    </header>
  <main role="main" class="container">
    <div class="row">
      <h1 class="cover-heading mb-4">Menus</h1>
    </div>
    <form class="row mb-3">
        <label for="search" class="font-weight-bold mr-3">Search For Dish</label>
        <input type="text" id="search"/>
        <button type="submit" id="findTable" class="btn btn-primary btn-sm ml-3">GO</button>
    </form>
      <card class="card row d-flex flex-row">  
        <h3 class="col-5 border bg-light"> Breakfast</h3>
        <h3 class="col-3 border bg-light"> Lunch</h3>
        <h3 class="col-3 border bg-light"> Dinner</h3>
        <div class="row">
            <div class="col-md-4">
                <card class="card">
                    <div class="card-body">
                      <img class="card-image" src="..."/>
                      <h5 class="card-title">Food 1</h5>
                      <p class="card-text">"Ingredient: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                           ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                           nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>               
                      
                    </div>
                  </card>
                </div>
                <div class="col-md-4">
                    <card class="card">
                        <div class="card-body">
                          <img class="card-image" src="..."/>
                          <h5 class="card-title">Food 1</h5>
                          <p class="card-text">"Ingredient: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                               ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                               nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>               
                          
                        </div>
                      </card>
                    </div>
                    <div class="col-md-4">
                        <card class="card">
                            <div class="card-body">
                              <img class="card-image" src="..."/>
                              <h5 class="card-title">Food 1</h5>
                              <p class="card-text">"Ingredient: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                   ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                   nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>               
                              
                            </div>
                          </card>
                        </div>
                        <div class="col-md-4">
                            <card class="card">
                                <div class="card-body">
                                  <img class="card-image" src="..."/>
                                  <h5 class="card-title">Food 1</h5>
                                  <p class="card-text">"Ingredient: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                       ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                       nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>               
                                  
                                </div>
                              </card>
                            </div>
                            <div class="col-md-4">
                                <card class="card">
                                    <div class="card-body">
                                      <img class="card-image" src="..."/>
                                      <h5 class="card-title">Food 1</h5>
                                      <p class="card-text">"Ingredient: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                           ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                           nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>               
                                      
                                    </div>
                                  </card>
                                </div>
                                <div class="col-md-4">
                                    <card class="card">
                                        <div class="card-body">
                                          <img class="card-image" src="..."/>
                                          <h5 class="card-title">Food 1</h5>
                                          <p class="card-text">"Ingredient: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                               ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                               nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>               
                                          
                                        </div>
                                      </card>
                                    </div>
                                    </card>
  </main>
  
  <footer class="mastfoot mt-auto fixed-bottom">
    <div class="inner">
      <p>Sample Restraunt using <a href="https://getbootstrap.com/">Bootstrap</a></p>
    </div>
  </footer>
</div>

</body>

</html>


  
