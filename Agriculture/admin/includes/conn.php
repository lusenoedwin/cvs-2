<?php
	$conn = new mysqli('localhost', 'root', '', 'agriculture');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>