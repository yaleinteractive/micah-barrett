<?php
  // If a title and a date were specified, insert a new event
  // into the database
  if (isset($_REQUEST['title']) && isset($_REQUEST['date'])) {
    $title = $_REQUEST['title'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    $description = $_REQUEST['description'];
    $image = basename($_FILES['image']['name']);
    // Construct SQL to insert a new row
    $sql = "INSERT INTO events (title, date, time, description, image)
                               VALUES('$title', '$date', '$time', '$description', '$image')";
    // Run the SQL
    $result = $conn->query($sql);
    // Get the ID of the inserted row
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
    echo "<h2>Event added</h2>";
  }
?>