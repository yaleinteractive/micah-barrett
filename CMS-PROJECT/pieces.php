<h1>Pieces library</h1>

<h2>Upload a new piece</h2>

	  <form enctype="multipart/form-data" method="post">
      <label>Image <input type="file" name="image"></label><br>
      <input type="submit" value="Upload">
      <label for="">morning
      <input type="radio" name="time_of_day" value="morning">
      </label>
      <label for="">noon
      <input type="radio" name="time_of_day" value="noon">
      </label>
      <label for="">afternoon
      <input type="radio" name="time_of_day" value="afternoon">
      </label>
      <label for="">evening
      <input type="radio" name="time_of_day" value="evening">
      </label>
      <label for="">night
      <input type="radio" name="time_of_day" value="night">
      </label>
  	  </form>

<?php 
 	include "header.php";
	include "connect.php";
 	include "insert.php";
 	include "global-nav.php";

 	echo "<div class='pieces-container'>";
	$sql = "SELECT * FROM pieces ORDER BY id DESC";
	  $result = $conn->query($sql);
	  // If there is at least 1 row in the result, show all the rows
	  if ($result->num_rows > 0) {
	      // Get one row at a time until we're out of rows
	      while ($row = $result->fetch_assoc()) {


	      		echo "<div class='piece-index'>";
	            echo "<span class='piece_number'>{$row['id']}</span><img class='thumbnail' src='uploads/{$row['id']}/{$row['image']}'>";
	            echo "</div>";

	      }
	  } else {
	      echo "No pieces";
	}

	echo "</div>";
	$conn->close();

 	include "scripts.php";

 ?>

	 