<h1>Pieces library</h1>

<?php 
 	include "header.php";
	include "connect.php";
 	include "insert.php";

	$sql = "SELECT * FROM pieces ORDER BY id";
	  $result = $conn->query($sql);
	  // If there is at least 1 row in the result, show all the rows
	  if ($result->num_rows > 0) {
	      // Get one row at a time until we're out of rows
	      while ($row = $result->fetch_assoc()) {



	            echo "{$row['id']}<img class='thumbnail' src='uploads/{$row['id']}/{$row['image']}'>";


	      }
	  } else {
	      echo "No pieces";
	}
	$conn->close();
 ?>

	 <h2>Add a piece</h2>

	  <form enctype="multipart/form-data" method="post">
      <label>Image <input type="file" name="image"></label><br>
      <input type="submit" value="Add">
  	  </form>