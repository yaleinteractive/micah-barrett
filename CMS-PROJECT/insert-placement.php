<?php


  // If a title and a date were specified, insert a new event
  // into the database
  if (isset($_REQUEST['piece_id']) && isset($_REQUEST['composition_id'])) {
    $piece_id = $_REQUEST['piece_id'];
    $composition_id = $_REQUEST['composition_id'];


    // Construct SQL to insert a new row
    $sql = "INSERT INTO placements (piece_id, composition_id)
                               VALUES('$piece_id','$composition_id')";
    // Run the SQL
    $result = $conn->query($sql);

    
    echo "<h2>Placement added</h2>";
  }
