<?php

	$mysqli_host = 'localhost';
	$mysqli_user = 'careabou_gaurav'; // Database user name in cPanel
	$mysqli_pass = 'e+y$duE=c)WF';

	$mysqli_database_name = 'careabou_login'; //Check the database name before connecting.
             
	 $conn = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_pass, $mysqli_database_name);

	 if (!$conn) {
	 	die("Sorry we're experiencing connection problems!".mysqli_error());
	 }
?>