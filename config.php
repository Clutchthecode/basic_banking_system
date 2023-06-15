<?php

	$servername = "localhost";
	$username = "babu";
	$password = "123456";
	$dbname = "fedral_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?> 