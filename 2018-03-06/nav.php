<?php 
	$compositions = "SELECT * FROM compositions ORDER by ID ASC";
	$comp_result = $conn->query($compositions);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo "<nav class='global-nav'>";
			echo "<a href='${row['id']}'>${row['id']}</a>";
			echo "</nav>";
		}
	}

 ?>