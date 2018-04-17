

<?php 
 	include "header.php";
	include "connect.php";
 	include "insert-placement.php";



	$id = $_GET['id'];
	$counter = 2;
	$rotation = 0;
	$minute = date('i');
	$hour = date('G');
	$left = $minute;
	$top = $hour;
	$scale = $hour / 10;
	$counter = 1;
	
	echo "<h1 class='composition_header'>$id</h1>";


	echo "<section class='content-wrapper'>";

	echo "<div class='composition_wrapper'>";
	$sql = "SELECT *
			FROM placements INNER JOIN pieces
			WHERE placements.composition_id = $id 
			AND pieces.id = placements.piece_id
			ORDER BY placements.id";
	  $result = $conn->query($sql);
	  // If there is at least 1 row in the result, show all the rows
	  if ($result->num_rows > 0) {
	      // Get one row at a time until we're out of rows
	      while ($row = $result->fetch_assoc()) {

		      echo "<img class='placed-pieces' style='top:".$top."%;left:".$left."%;transform:rotate(".$rotation."deg) scale(".$scale.");' src='uploads/{$row['piece_id']}/{$row['image']}'>";

		      $counter++; 


		      $rotation = $rotation + 20;
		      $scale = $scale / 2;
		      $left = $left + 10;

		      if ($scale <= 0.1) {
		      	$scale = 1.5;
		      }
		      if ($left > 61) {
		      	$left = 0;
		      	$top = $top * 3;
		      }

		      if ($top > 50 && $scale > 1) {
		      	$top = -10;
		      }
	      }
	  } else {
	      echo "<h2 class='announcement'>Add some pieces!</h2>";
	}
	echo "</div>";
    echo "</section>";


	$sql_2 = "SELECT * FROM pieces ORDER BY id DESC";
	$result_2 = $conn->query($sql_2);

	echo '<form class="pieces-drawer" enctype="multipart/form-data" method="post">
      		<h2>Add a piece</h2>';

	if ($result_2->num_rows > 0) {
		while ($row = $result_2->fetch_assoc()) {
			echo "<label class='pieces'>"; 
			echo "<img class='drawer-image' src='uploads/{$row['id']}/{$row['image']}'> "; 
			echo '<input type="radio" name="piece_id"'; 
			echo "value='";
			echo "{$row['id']}";
			echo "'></label>";

		}
	}

	echo "<input type='hidden' value='$id' name='composition_id'><br>
      <input type='submit' value='Add'></form>";


    
	

	include "global-nav.php";



	$conn->close();
 	include "scripts.php";

	
 ?>

	