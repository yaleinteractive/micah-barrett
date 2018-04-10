<?php 
	$title = $_REQUEST["title"];
	$date = $_REQUEST["date"];
	$time = $_REQUEST["time"];
	$description = $_REQUEST["description"];

	
	// If a title and a date were specified, insert a new event into the database
	if ($title && $date) {
		if ($_FILES['image']) {

			$uploaddir = '/Applications/MAMP/htdocs/uploads/';
			$uploadfile = $uploaddir . basename($_FILES['image']['name']);

			echo '<pre>';
			if (move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)) {
				echo "file is valid, and was successfully uploaded.\n";
				$image = basename($_FILES['image']['name']);
			}

			echo "here is some more debugging info ";
			print_r($_FILES);
			print '</pre>';

		}
		// CONSTRUCT SQL to insert new row
		$sql = "INSERT INTO events (title,date,time,description) VALUES('$title','$date','$time','$description')";

		// Run the SQL
		$result = $conn->query($sql);
		echo "<h2>Event added!</h2>";
	}
 ?>