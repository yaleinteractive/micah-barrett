<?php

	include "header.php";
	include "connect.php";
	include "global-nav.php";

  // If a title and a date were specified, insert a new event
  // into the database

    echo "<h2>Composition added</h2>";


    // Construct SQL to insert a new row
    $sql_5 = "INSERT INTO composition (id)
            VALUES(null)";
    // Run the SQL
    $result_5 = $conn->query($sql_5);
    
    $sql_6 = "SELECT * from composition ORDER BY ID DESC LIMIT 1";
    $result_6 = $conn->query($sql_6);
    if ($result_6->num_rows > 0){
    	while ($row = $result_6->fetch_assoc()) {
    		echo "<h2 class='announcement'>Composition Added!<br><a class='next' href='composition.php?id={$row['id']}'>Check it out</a></h2>";
    	}
    }

    
 	include "scripts.php";
  

?>
