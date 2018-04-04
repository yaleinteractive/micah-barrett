<?php 
	$title = $_GET["title"];
	$filename = $_GET["filename"];
	$time = $_GET["time"];


	
	// If a title and a date were specified, insert a new event into the database
	if ($filename) {
		
		// CONSTRUCT SQL to insert new row
		$sql = "INSERT INTO pieces (title,filename) VALUES('$title','$filename')";

		// Run the SQL
		$result = $conn->query($sql);
		echo "<h2>piece added!</h2>";
	}
 ?>