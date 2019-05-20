<!DOCTYPE html>
<?php
   include('session.php');
?>
<html>
	<head>
		<title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="AdditionalStyle.css">
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
                  <span class="nav-link text-muted">Reserves</span>
              </a>
              <a class="nav-item active" href="reviews.html">
                  <span class="nav-link text-white">Reviews</span>
                </a>
          </nav>
      </div>
    </header>
  <main role="main" class="container">
    <div class="row">
      <h1 class="cover-heading mb-4">Reviews</h1>
    </div>
    <div class="row">
        <h4 class="cover-heading mb-2">Write a Review</h4>
    </div>
     <form class="row">      
          <card class="col-8 card mb-4">
              <div class="card-header">
                <div class="text-left">
                  <i id="one-star"class="fas fa-star rating"></i>
                  <i id="two-star" class="fas fa-star rating"></i>
                  <i id="three-star" class="fas fa-star rating"></i>
                  <i id="four-star" class="fas fa-star rating"></i>
                  <i id="five-star" class="fas fa-star rating"></i>
                  <h5 class="card-title text-muted d-inline"> for </h5>
                  <h5 class="card-title d-inline">Great Food</h5>
                </div>
                <div class="col-12 text-right">
                  <span>by</span>
                  <span class="text-primary"> @user1</span>
                </div>
              </div>
                <div class="card-body col-12">
                  <textarea class="card-text col-12"></textarea>                
                </div>
            </card>
            <div class="col-8">
              <button type="submit" id="findTable" class="btn btn-primary btn-sm ml-3">Add Review!</button>  
            </div>
    </form>
    <div class="row">
        <h4 class="cover-heading mb-2">Reviews</h4>
      </div>
    <div class="row">
      <div class="col-8">
          <card class="card">
            <div class="card-header">
              <div class="text-left">
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <h5 class="card-title text-muted d-inline"> for </h5>
                <h5 class="card-title d-inline">Great Food</h5>
              </div>
              <div class="col-12 text-right">
                <span>by</span>
                <span class="text-primary"> @user1</span>
              </div>
            </div>
              <div class="card-body">
                <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                   labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                
               </div>
            </card>
            <card class="card">
                <div class="card-header">
                  <div class="text-left">
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <h5 class="card-title text-muted d-inline"> for </h5>
                    <h5 class="card-title d-inline">Great Food</h5>
                  </div>
                  <div class="col-12 text-right">
                    <span>by</span>
                    <span class="text-primary"> @user1</span>
                  </div>
                </div>
                  <div class="card-body">
                    <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                       labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                
                   </div>
                </card>
                <card class="card">
                    <div class="card-header">
                      <div class="text-left">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <h5 class="card-title text-muted d-inline"> for </h5>
                        <h5 class="card-title d-inline">Great Food</h5>
                      </div>
                      <div class="col-12 text-right">
                        <span>by</span>
                        <span class="text-primary"> @user1</span>
                      </div>
                    </div>
                      <div class="card-body">
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                
                       </div>
                    </card>
                    <card class="card">
                        <div class="card-header">
                          <div class="text-left">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <h5 class="card-title text-muted d-inline"> for </h5>
                            <h5 class="card-title d-inline">Great Food</h5>
                          </div>
                          <div class="col-12 text-right">
                            <span>by</span>
                            <span class="text-primary"> @user1</span>
                          </div>
                        </div>
                          <div class="card-body">
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                               labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                
                           </div>
                        </card>
                        <card class="card">
                            <div class="card-header">
                              <div class="text-left">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <h5 class="card-title text-muted d-inline"> for </h5>
                                <h5 class="card-title d-inline">Great Food</h5>
                              </div>
                              <div class="col-12 text-right">
                                <span>by</span>
                                <span class="text-primary"> @user1</span>
                              </div>
                            </div>
                              <div class="card-body">
                                <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                   labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                
                               </div>
                            </card>
                            <card class="card">
                                <div class="card-header">
                                  <div class="text-left">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <h5 class="card-title text-muted d-inline"> for </h5>
                                    <h5 class="card-title d-inline">Great Food</h5>
                                  </div>
                                  <div class="col-12 text-right">
                                    <span>by</span>
                                    <span class="text-primary"> @user1</span>
                                  </div>
                                </div>
                                  <div class="card-body">
                                    <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                       labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                
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


  
