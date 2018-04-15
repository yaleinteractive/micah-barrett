<?php

	include "header.php";
	include "connect.php";
  // If a title and a date were specified, insert a new event
  // into the database



    // Construct SQL to insert a new row
    $sql_5 = "INSERT INTO composition (id)
            VALUES(null)";
    // Run the SQL
    $result_5 = $conn->query($sql_5);
    

    
    echo "<h2>Composition added</h2>";
  

?>
