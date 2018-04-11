<h1>Placements</h1>

<?php 
 	include "header.php";
	include "connect.php";
 	include "insert-placement.php";

	$sql = "SELECT * FROM placements ORDER BY id";
	$result = $conn->query($sql);
	// If there is at least 1 row in the result, show all the rows
	if ($result->num_rows > 0) {
	    // Get one row at a time until we're out of rows
	    while ($row = $result->fetch_assoc()) {
	    	echo "<p>placement:{$row['id']} <br>";
	    	echo "</p>";
	    }
	} 
	

	else {
		echo "No placements";
	}

	$sql_2 = "SELECT * FROM pieces ORDER BY id";
	$result_2 = $conn->query($sql_2);

	echo '<form enctype="multipart/form-data" method="post">
      		<label>Add a Piece<br> ';

	if ($result_2->num_rows > 0) {
		while ($row = $result_2->fetch_assoc()) {
			echo "piece {$row['id']} "; 
			echo '<input type="radio" name="piece_id"'; 
			echo "value='";
			echo "{$row['id']}";
			echo "'>";
		}
	}

	echo "<label>Composition Id <input type='text' name='composition_id'></label><br>
      <input type='submit' value='Add'></form>";

	$conn->close();

	

 ?>

	
	 