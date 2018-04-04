<?php 

	if ($visited_before) {
		echo "<h2>Welcome Back!</h2>";

	}



 

	else{

		echo "<h2>Welcome new user</h2>";

		$sql = "INSERT INTO sessions (first_visit) VALUES(NOW())";
		$result = $conn->query($sql);

	}

 ?>