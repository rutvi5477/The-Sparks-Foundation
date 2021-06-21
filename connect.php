<?php
	//Connection
	$servername = "localhost";
	$username = "id17064487_root";
	$password = "h1pNo_c2-|2g&?lr";
	$dbname = "id17064487_spark";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>