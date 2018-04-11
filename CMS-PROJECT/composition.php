

<?php 
 	include "header.php";
	include "connect.php";

	
	$id = $_GET['id'];
	$counter = 2;
	$rotation = 30;
	// $minute = date('i');
	$minute = 1;
	$left = $minute/2;

	echo "<h1>$id</h1>";

	echo "<div class='composition_wrapper'>";
	$sql = "SELECT pieces.*, placements.* FROM pieces, placements WHERE composition_id = $id";
	  $result = $conn->query($sql);
	  // If there is at least 1 row in the result, show all the rows
	  if ($result->num_rows > 0) {
	      // Get one row at a time until we're out of rows
	      while ($row = $result->fetch_assoc()) {

	      echo "<img class='placed-pieces' style='left:".$left."%;transform:rotate(".$rotation."deg);' src='uploads/{$row['piece_id']}/{$row['image']}'>";
	      $rotation++;
	      $left = $left +1;

	      }
	  } else {
	      echo "No placements";
	}
	echo "</div>";


	
	$conn->close();
	
 ?>

	