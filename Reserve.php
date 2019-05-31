<?php
$currentpage = "Reserve";
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
	
?>

<body class="text-center">
  <main role="main" class="container">
    <div class="row">
      <h1 class="cover-heading mb-4">Reserve a Table</h1>
    </div>
    <form action="Reserve.php" method="get" class="row" >
      <label for="search-date" class="font-weight-bold mr-3 ml-3"> Date: </label>
      <input type="date" id="search-date" name="search-date"/>
      <label for="search-time" class="font-weight-bold mr-3 ml-3"> Time: </label>
      <input type="time" id="search-time" name="search-time" min="7:00" max="20:00" value="17:00" step="1800" />
      <button type="submit" id="findTable" class="btn btn-primary btn-sm ml-3">Find a Table!</button>
    </form>
    <div class="row">
      <p class="lead">This Restraunts hours are 7:00 AM to 9:00 PM</p>
    </div>
    <div class="row">
      <h3 class="cover-heading mb-4">Reserve a Table</h3>
    </div>
    <div class="row text-center">

    <?php

	// If searching, show open tables
	if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET['search-date'] && _GET['search-time']) {
	
		// Escape user inputs for security
		$sdate = mysqli_real_escape_string($conn, $_GET['search-date']);
		$stime = mysqli_real_escape_string($conn, $_GET['search-time']);

		$sdatetime = "$sdate $stime";

		// Get the tables that are open
		$query = "SELECT * FROM Tables WHERE Tid NOT IN (SELECT DISTINCT Tid FROM Reservation WHERE StartTime IN (SELECT StartTime FROM Reservation WHERE 59 > (SELECT TIMESTAMPDIFF(minute, Reservation.StartTime, '$sdatetime'))) AND StartTime IN (SELECT StartTime FROM Reservation WHERE -59 < (SELECT TIMESTAMPDIFF(minute, Reservation.StartTime, '$sdatetime'))))";
		$result = mysqli_query($conn, $query);
		// If there are none, say so
		if (mysqli_num_rows($result) == 0) {
			echo "<p>No Tables are avalible at this time.</p>";
		} else{ // Else display them
			while ($row = mysqli_fetch_assoc($result)) {
      			
				echo '<form class="col-md-4" method="post">';
			        echo '<card class="card">';
			        echo '<div class="card-body">';
			        echo '<h5 class="card-title">Table ' . $row["Tid"] . '</h5>';
			        echo '<input type="hidden" name="Tid" value=' . $row["Tid"] . '>';
			        echo '<input type="hidden" name="StartDate" value=' . $sdate . '>';
			        echo '<input type="hidden" name="StartTime" value=' . $stime . '>';
			        echo '<p class="card-text">Seats: ' . $row["NumberOfSeats"] . '</p>';
			        echo '<p class="card-text">Shape: ' . $row["Shape"] . '</p>';
   			        echo '<button type="submit" class="btn btn-primary">Reserve</button>';
			        echo '</div>';
			        echo '</card>';
				echo '</form>';
			}
		}
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		// Get data from clicked box 
		$Tid = mysqli_real_escape_string($conn, $_POST['Tid']);
		$StartTime = mysqli_real_escape_string($conn, $_POST['StartTime']);
		$StartDate = mysqli_real_escape_string($conn, $_POST['StartDate']);
		$StartDateTime = "$StartDate $StartTime";

		// See you already have a table reserved
		$queryIn = "SELECT * FROM Reservation WHERE Cid='$Cid'";
		$resultIn = mysqli_query($conn, $queryIn);
		
		//If you do, quit
		if (mysqli_num_rows($resultIn)> 0) {
			echo "<p>Can't add reservation. You already have made one.</p>";
		} else {
			// attempt insert query 
			$query = "INSERT INTO Reservation (Cid, Tid, StartTime) VALUES ('$Cid', '$Tid', '$StartDateTime')";
			if(mysqli_query($conn, $query)){
				echo "<p>Reservation added successfully.</p>";
			} else{
				echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
			}
		}
	}
   ?>

    </div>
    <div class="row">
      <h3 class="cover-heading mb-4">My Reservations</h3>
    </div>
    <div class="row text-center">
    <?php

	// If fetching, get users reservation
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	
		// Escape user inputs for security

		// Get the tables that are open
		$query = "SELECT * FROM Reservation WHERE Cid='$Cid'";
		$result = mysqli_query($conn, $query);
		// If there are none, say so
		if (mysqli_num_rows($result) == 0) {
			echo "<p>You don't have a reservation.  Why not make one?</p>";
		} else{ // Else display them
			$row = mysqli_fetch_assoc($result);
			$Tid = $row["Tid"];
			$StartTime = $row["StartTime"];
			$query = "SELECT * FROM Tables WHERE Tid='$Tid'";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
      			
				echo '<form class="col-md-4" method="post">';
			        echo '<card class="card">';
			        echo '<div class="card-body">';
			        echo '<h5 class="card-title">Table ' . $row["Tid"] . '</h5>';
			        echo '<input type="hidden" name="DeleteTid" value=' . $row["Tid"] . '>';
			        echo '<p class="card-text">Seats: ' . $row["NumberOfSeats"] . '</p>';
			        echo '<p class="card-text">Shape: ' . $row["Shape"] . '</p>';
			        echo '<p class="card-text">Time: ' . $StartTime . '</p>';
   			        echo '<button type="submit" class="btn btn-warning">Cancel</button>';
			        echo '</div>';
			        echo '</card>';
				echo '</form>';
			}
		}
	}
/*	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		// Get data from clicked box 
		$Tid = mysqli_real_escape_string($conn, $_POST['Tid']);
		$StartTime = mysqli_real_escape_string($conn, $_POST['StartTime']);
		$StartDate = mysqli_real_escape_string($conn, $_POST['StartDate']);
		$StartDateTime = "$StartDate $StartTime";

		// See you already have a table reserved
		$queryIn = "SELECT * FROM Reservation WHERE Cid='$Cid'";
		$resultIn = mysqli_query($conn, $queryIn);
		
		//If you do, quit
		if (mysqli_num_rows($resultIn)> 0) {
			echo "<p>Can't add reservation. You already have made one.</p>";
		} else {
			// attempt insert query 
			$query = "INSERT INTO Reservation (Cid, Tid, StartTime) VALUES ('$Cid', '$Tid', '$StartDateTime')";
			if(mysqli_query($conn, $query)){
				echo "<p>Reservation added successfully.</p>";
			} else{
				echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
			}
		}
	}
*/
   ?>

    </div>
  </main>

  <footer class="mastfoot mt-auto fixed-bottom">
    <div class="inner">
      <p>Sample Restraunt using <a href="https://getbootstrap.com/">Bootstrap</a></p>
    </div>
  </footer>
  </div>

</body>

    <?php
	// close connection
	mysqli_close($conn);
    ?>

</html>
