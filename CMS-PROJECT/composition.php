

<?php 
 	include "header.php";
	include "connect.php";
 	include "insert-placement.php";


	$id = $_GET['id'];
	$counter = 2;
	$rotation = 30;
	$minute = date('i');

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

	$sql_2 = "SELECT * FROM pieces ORDER BY id";
	$result_2 = $conn->query($sql_2);

	echo '<form class="piece-drawer" enctype="multipart/form-data" method="post">
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

	echo "<input type='hidden' value='$id' name='composition_id'><br>
      <input type='submit' value='Add'></form>";

	$conn->close();
	
 ?>

	