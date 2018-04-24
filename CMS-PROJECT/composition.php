

<?php 
 	include "header.php";
	include "connect.php";
 	include "insert-placement.php";

 	date_default_timezone_set('America/New_York');


	$id = $_GET['id'];
	$counter = 2;
	$minute = date('i');
	
	$hour = date('G');
	$left = -30;
	$hour = 20;


	$top = -10;
	$scale = $hour / 10;
	$counter = 1;

	$rotation = $minute * 6;

	if ($hour > 12 && $hour < 18) {
		$afternoon = True;

		$morning = False;
		$evening = False;
		$night = False;
	}

	if ($hour > 4 && $hour < 12) {
		$morning = True;

		$afternoon = False;
		$evening = False;
		$night = False;
	}

	if ($hour > 17 && $hour < 20) {
		$evening = true;

		$morning = false;
		$afternoon = false;
		$night = false;
	}

	if ($hour > 19 || $hour < 4) {
		$night = True;

		$morning = False;
		$aftenroon = False;
		$evening = False;
	}
	

	
	echo "<h1 class='composition_header'># $id at <time>$hour:$minute</time></h1>";




	

	echo "<section class='content-wrapper'>";

	echo "<div style='width:".($hour*4)."vw;' class='composition_wrapper'>";
	$sql = "SELECT *
			FROM placements INNER JOIN pieces
			WHERE placements.composition_id = $id 
			AND pieces.id = placements.piece_id
			ORDER BY placements.id";
	  $result = $conn->query($sql);
	  $total_rows = $result->num_rows;
	  // If there is at least 1 row in the result, show all the rows
	  if ($total_rows > 0) {
	      // echo $total_rows;
	      // Get one row at a time until we're out of rows
	      while ($row = $result->fetch_assoc()) {

			  	
		    echo "<img class='placed-pieces' style='";
		    // scaling based on it being the afternoon
		    if ($afternoon && $row['time_of_day'] == 'afternoon') {
				    echo  "transform:scale(1.5)";
		  	}
		  	if ($afternoon && $row['time_of_day'] == 'morning') {
				    echo  "transform:scale(0.25)";
		  	}

		  	if ($afternoon && $row['time_of_day'] == 'night') {
				    echo  "transform:scale(0.55)";
		  	}

		  	// scaling based on it being night
		  	if ($night && $row['time_of_day'] == 'night') {
				    echo  "transform:scale(1.5)";
		  	}

		  	if ($night && $row['time_of_day'] == 'morning') {
				    echo  "transform:scale(0.2)";
		  	}

		  	if ($night && $row['time_of_day'] == 'afternoon') {
				    echo  "transform:scale(0.4)";
		  	}

		  	// scaling based on it being morning

		  	if ($morning && $row['time_of_day'] == 'morning') {
				    echo  "transform:scale(2.0)";
		  	}

		  	if ($morning && $row['time_of_day'] == 'night') {
				    echo  "transform:scale(0.2)";
		  	}

		  	if ($morning && $row['time_of_day'] == 'afternoon') {
				    echo  "transform:scale(0.5)";
		  	}


		  	if ($evening && $row['time_of_day'] == 'evening') {
		  		echo "transform:scale(1.25)";
		  	} 


		  	

		  	echo "rotate(".$rotation."deg);";
	    	echo "left:".$left."%; top:".$top."%;";

		    echo "'src='uploads/{$row['piece_id']}/{$row['image']}'>";
		    // echo "<p>".$row['time_of_day']."</p>";
		  	
		    $left = $left + 10;
		    if ($left > 80) {
		    	$left = -30;
		    	$top = $top + 10;
		    }
	    }


	  } else {
	      echo "<h2 class='announcement'><a class='next' href='#drawer'>Add some pieces!</a></h2>";
	}
	echo "</div>";
    echo "</section>";




	$sql_2 = "SELECT * FROM pieces ORDER BY id DESC";
	$result_2 = $conn->query($sql_2);

	echo '<form class="pieces-drawer" id="drawer" enctype="multipart/form-data" method="post" action="composition.php?id='.$id.'">
      		<h2 class="pieces-drawer_title">Insert a piece</h2>
			<div class="pieces-container">
      		';

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
	echo "</div>";
	echo "<input type='hidden' value='$id' name='composition_id'><br>
      <input type='submit' value='Insert'></form>";


    
	echo "<a href='pieces.php'>upload more pieces</a>";

	include "global-nav.php";



	$conn->close();
 	include "scripts.php";

	
 ?>

	