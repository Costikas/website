<?php
$servername = "localhost";
	$username = "PG4214NL";
	$password = "jkm_PG4214NL";
	$dbname = "PG4214NL";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
?>
	