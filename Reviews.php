<?php
$currentpage = "Reviews";
include('session.php');
?>
<!DOCTYPE html>
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
  <?php
// PHP HEADER
	include "header.php";
	// change the value of $dbuser and $dbpass to your username and password
	include 'connectvars.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}

// inserting into the database
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$username = $_SESSION['login_user'];
   	$query = "SELECT Cid FROM Customer WHERE Email = '$username'";
   	$result = mysqli_query($conn, $query);	
		$userCid = mysqli_fetch_assoc($result);

		$userCid = $userCid['Cid'];
   	$ReviewText = $_POST['custReview']; 
		$ReviewRating = $_POST['rate'];
	
		$sql = "UPDATE Review SET ReviewText='$ReviewText',ReviewRating=$ReviewRating WHERE Cid = $userCid";
		
		mysqli_query($conn, $sql);
   }
	?>

    <main role="main" class="container">
      <div class="row">
        <h1 class="cover-heading mb-4">Reviews</h1>
      </div>
      <div class="row">
        <h4 class="cover-heading mb-2">Write a Review</h4>
      </div>
      <form class="row" action="Reviews.php" method="POST">
        <card class="col-8 card mb-4">
          <div class="card-header">
            <div class="text-left">
              <i id="one-star" class="fas fa-star rating"></i>
              <i id="two-star" class="fas fa-star rating"></i>
              <i id="three-star" class="fas fa-star rating"></i>
              <i id="four-star" class="fas fa-star rating"></i>
              <i id="five-star" class="fas fa-star rating"></i>
				  </br>
              <input type="checkbox"  name='rate' value=1>
              <input type="checkbox"  name='rate' value=2>
              <input type="checkbox"  name='rate' value=3>
              <input type="checkbox"  name='rate' value=4>
              <input type="checkbox"  name='rate' value=5>
              <h5 class="card-title text-muted d-inline"> for </h5>
              <h5 class="card-title d-inline">Great Food</h5>
            </div>
            <div class="col-12 text-right">
              <span>by</span>
              <span class="text-primary">
	      <?php
			echo $_SESSION['login_user'];
	      ?>
              </span>
            </div>
          </div>
          <div class="card-body col-12">
            <textarea class="card-text col-12" name="custReview"></textarea>
          </div>
        </card>
        <div class="col-8">
          <button type="submit" id="findTable" class="btn btn-primary btn-sm ml-3">Add Review</button>
        </div>
      </form>
      <div class="row">
        <h4 class="cover-heading mb-2">Reviews</h4>
      </div>
      <div class="row">

		<?php
			//Populate page with reviews
  		   $query = "SELECT Review.*, Customer.Name FROM Review, Customer WHERE Review.Cid = Customer.Cid && Review.ReviewText IS Not Null ORDER BY ReviewRating DESC";
   		$result = mysqli_query($conn, $query);	
			
			if (mysqli_num_rows($result) == 0) {
			echo "<p> There are no reviews at this time</p>";	
			}

			else{ // make reviews
         	echo ' <div class="col-8">';
					while ($row = mysqli_fetch_assoc($result)) {
				   	echo '<card class="card">';
            		echo '<div class="card-header">';
               	echo '<div class="text-left">';
						for ( $i = 0; $i < $row['ReviewRating']; $i++){ //
               		echo '<i class="fas fa-star text-primary"></i>';
						}
						for ( $i = 0; $i < (5-$row['ReviewRating']); $i++ ){
               		echo '<i class="fas fa-star"></i>';
						}

               	echo '<h5 class="card-title text-muted d-inline"> for </h5>';
              		echo '<h5 class="card-title d-inline">Great Food</h5>';
             		echo '</div>';
             		echo '<div class="col-12 text-right">';
               	echo '<span>by</span>';
                	echo '<span class="text-primary"> ' . $row["Name"] . '</span>';
              		echo '</div>';
            		echo '</div>';
          			echo ' <div class="card-body">';
             		echo ' <p class="card-text">" ' . $row['ReviewText'] . ' "</p>';
           			echo ' </div>';
         			echo ' </card>';
				
					}
		
				echo' </div>';
		 }
        
		?>


    </main>

    <footer class="mastfoot mt-auto fixed-bottom">
      <div class="inner">
        <p>Sample Restraunt using <a href="https://getbootstrap.com/">Bootstrap</a></p>
      </div>
    </footer>
  </div>

</body>

</html>
