
	<?php 
		include "header.php";
 		include "connect.php";
 		include "global-nav.php";

	        
	  
 	$sql_7 = "SELECT * from composition ORDER BY ID DESC LIMIT 1";
    $result_7 = $conn->query($sql_7);
    if ($result_7->num_rows > 0){
    	while ($row = $result_7->fetch_assoc()) {
    		$next_composition = $row['id'] + 1;
 
	    	}
	    }

	    $conn->close();

	    
    ?>
	<?php include "footer.php"; ?>

	<!-- <h1>Compositions</h1> -->
	<h1 class="announcement">
		Add a piece and let the browser do its thing.


	</h1>
	<h1 class="announcement"><a class="next" href="new-composition.php">Make Composition <?php echo "$next_composition";  ?></a> </h1>

