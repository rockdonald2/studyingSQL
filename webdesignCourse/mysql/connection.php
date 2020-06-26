<?php

	$server = "localhost";
	$username = "root";
	$password = "";

	$db = "my_first_database";


	// create a connection
	$conn = mysqli_connect($server, $username, $password, $db);

	// check the connection
	if (!$conn) {
		die("Connection failed" . mysqli_connect_error());
	}

	echo "<div class='alert alert-success'>Connected successfully!</div>";
?>