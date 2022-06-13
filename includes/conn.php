<?php
	$conn = new mysqli('localhost', 'root', '', 'cvs');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>

<?php
$conn1 = new mysqli('localhost', 'root', '', 'science');

if ($conn1->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<?php
$conn2= new mysqli('localhost', 'root', '', 'agriculture');

if ($conn2->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<?php
$conn3 = new mysqli('localhost', 'root', '', 'business');

if ($conn3->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<?php
$conn4 = new mysqli('localhost', 'root', '', 'education');

if ($conn4->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
