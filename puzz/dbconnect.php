<?php  
//MySQl
		$servernamedb = "localhost";
		$usernamedb = "root";
		$passworddb = "";
		$dbname = "siva";

		// Create connection
		$conn = new mysqli($servernamedb, $usernamedb, $passworddb, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
?>