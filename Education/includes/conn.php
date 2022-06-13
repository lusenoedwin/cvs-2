<?php
	$conn = new mysqli('localhost', 'root', '', 'education');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>