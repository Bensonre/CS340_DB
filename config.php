<?php
  // Define database connection constants
  define('DB_HOST', 'classmysql.engr.oregonstate.edu');
  define('DB_USER', 'cs340_bensonre');
  define('DB_PASSWORD', '4870');
  define('DB_NAME', 'cs340_bensonre');
  define('CON_STRING', 'mysql:host=classmysql.engr.oregonstate.edu;dname=cs340_bensonre');
  $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
  if (!$db) {
    die('Could not connect: ' . mysql_error());
  }
?>
