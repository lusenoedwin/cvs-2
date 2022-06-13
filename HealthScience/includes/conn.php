<?php
	$conn = new mysqli('localhost', 'root', '', 'healthscience');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>