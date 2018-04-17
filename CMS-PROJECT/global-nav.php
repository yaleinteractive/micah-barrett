<?php
	$hour = date('G');
	$minute = date('i');

	echo "<nav class='global-nav'>";
	echo "<a class='global-nav_trigger'>index</a>";
	echo "<ul class='global-nav_list'>";
	echo "<li class='global-nav_item new'><a href='new-composition.php'>New</a></li>";

	


    $sql_3 = "SELECT *
			FROM composition 
			ORDER BY id DESC";
	$result_3 = $conn->query($sql_3);
	if ($result_3->num_rows > 0) {

      // Get one row at a time until we're out of rows
    	while ($row = $result_3->fetch_assoc()) {
    		echo "<li class='global-nav_item' style='transform:rotate(".rand(-$minute,$minute)."deg);'><a href='composition.php?id={$row['id']}'>{$row['id']}</li></a>";	

    	}

	}
	echo "</ul>";
	echo "</nav>";

	

 ?>