<?php
  $image = basename($_FILES['image']['name']);
  $time_of_day = $_REQUEST['time_of_day'];
  // If a title and a date were specified, insert a new event
  // into the database
  if ($image) {
    // Construct SQL to insert a new row
    $sql = "INSERT INTO pieces (image, time_of_day)
                               VALUES('$image', '$time_of_day')";
    // Run the SQL
    $result = $conn->query($sql);
     $id = $conn->insert_id;
    if ($image) {
    	$uploaddir = dirname(__FILE__) . "/uploads/$id";
    	mkdir($uploaddir);
    	$success = move_uploaded_file($_FILES['image']['tmp_name'], "$uploaddir/$image");
    	// echo '<pre>';
    	// if ($success) {
    	//   echo "File is valid, and was successfully uploaded.\n";
    	// }
    	// echo 'Here is some more debugging info:';
    	// print_r($_FILES);
    	// print "</pre>";
    }
    echo "<h2>another piece</h2>";
  }
