<?php 
	echo "<nav class='global-nav'>";
	echo "<a class='global-nav_trigger'>index</a>";
	echo "<ul class='global-nav_list'>";
    $sql_3 = "SELECT *
			FROM composition 
			ORDER BY id";
	$result_3 = $conn->query($sql_3);
	if ($result->num_rows > 0) {

      // Get one row at a time until we're out of rows
    	while ($row = $result_3->fetch_assoc()) {
    		echo "<li class='global-nav_item'><a href='composition.php?id={$row['id']}'>{$row['id']}</li></a>";	

    	}

	}
	echo "</ul>";
	echo "</nav>";

	

 ?>