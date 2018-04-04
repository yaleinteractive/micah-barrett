<?php 
	$title = $_GET["title"];
	$date = $_GET["date"];
	$time = $_GET["time"];
	$description = $_GET["description"];

	
	// If a title and a date were specified, insert a new event into the database
	if ($title && $date) {
		
		// CONSTRUCT SQL to insert new row
		$sql = "INSERT INTO events (title,date,time,description) VALUES('$title','$date','$time','$description')";

		// Run the SQL
		$result = $conn->query($sql);
		echo "<h2>Event added!</h2>";
	}
 ?>