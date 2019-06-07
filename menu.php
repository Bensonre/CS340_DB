<?php 
$currentpage = "Menu";
include('session.php');
?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<?php
// PHP HEADER
	include "header.php";

	// change the value of $dbuser and $dbpass to your username and password
	include 'connectvars.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}

	// Get email from session and query for corresponding ID.
	$Email = $_SESSION['login_user'];
	$query = "SELECT Cid FROM Customer WHERE Email='$Email'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	$Cid = $row["Cid"];
// END PHP HEADER
?>

<!-- SEARCH PROMPT -->
<body class="text-center">
  <div class="cover-containter">
    <main role="main" class="container">
      <div class="row">
        <h1 class="cover-heading mb-4">Menus</h1>
      </div>
      <form class="row mb-3">
        <label for="search" class="font-weight-bold mr-3">Search For Dish</label>
        <input type="text" id="search" />
        <button type="submit" id="findTable" class="btn btn-primary btn-sm ml-3">GO</button>
      </form>
    </main>
  </div>

  <!-- BEGIN MENU CARD CONTAINER -->
  <card class="card row d-flex flex-row"> 
        <h3 class="col-5 border bg-light"> Breakfast</h3>
        <h3 class="col-3 border bg-light"> Lunch</h3>
        <h3 class="col-3 border bg-light"> Dinner</h3>
        <div class="row"> 
          
<?php
// PHP SEARCH
  // SHOW MENU ON SEARCH
	if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET['search']) {
	
		// Escape user inputs for security
		$userquery = mysqli_real_escape_string($conn, $_GET['search']);

    // Get the menus that fit query    
    // I realize this query is specific to dinner at the moment and don't know what I should do about it
    $query = "SELECT DISTINCT Contains.Dish, Contains.Price, Menu.Title, Picture.URL, Dish.Description FROM Menu JOIN Contains ON Menu.Title=Contains.menu JOIN Dish ON Dish.DishName = Contains.Dish NATURAL JOIN Picture WHERE (Menu.PeriodOfDay = 'Dinner' OR Menu.PeriodOfDay = 'All-Day') and (Contains.menu like '%$userquery%' or Menu.season like '%$userquery%' or  Contains.Dish like '%$userquery%' or Dish.description like '%$userquery%') ORDER by Menu.Title DESC"
    $result = mysqli_query($conn, $query);

		// IF NO RESULTS
		if (mysqli_num_rows($result) == 0) {
			echo "<p>No menus satisfied your query.</p>";
		} else{ // ELSE DISPLAY MENUS
			while ($row = mysqli_fetch_assoc($result)) {
      			
				echo '<div class="col-md-4">';
			        echo '<card class="card">';
              echo '<div class="card-body">';
              echo '<img class="card-image" src="' . $row["Picture.URL"] .'" />'
              echo '<h5 class="card-title">Menu 1 ' . $row["Title"] . '</h5>'
              echo '<p class="card-text">Season: ' . $row["Season"] . '</p>';
              echo '<p class="card-text">Time of Day: ' . $row["PeriodOfDay"] . '</p>';
              echo '</div>';
			        echo '</card>';
				echo '</div>';
			}
		}
  }     
// END PHP SEARCH
?>

  <!-- END MENU CARD CONTAINER -->
  </card>
</body>

<?php
	// CLOSE CONNECTION
  mysqli_close($conn);
?>

</html>
