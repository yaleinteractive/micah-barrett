


	<?php 
		include "header.php";
 		include "connect.php";
 		include "insert.php";

	    $id = $_GET['id'];
	    $seconds = date("s");
	    $minutes = date("i");
	    $day_of_month = date("d");
	    $rotation = $seconds * 6;
	    $scale = $day_of_month / 5;
	    $left = $minutes/2;

		$sql = "SELECT * FROM pieces WHERE composition_id = $id ORDER by uploaded_date ASC";
	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
	        while($row = $result->fetch_assoc()) {

			    echo 
			    	"<div class='image-wrapper' style='left:".$left."vw;transform:rotate(".$rotation."deg);'>
	            		<img class='placed' src='uploads/{$row['filename']}'>
	            	</div>";
	            $rotation = $rotation + $rotation;
	            $left = $left + $left;
	            if ($rotatione >= 360) {
	            	$rotation = 0;
	            }
	        }

		    $result->data_seek(0);
	        echo "<nav class='drawer'>";
	        echo "<h3 class='drawer_title'>Pieces</h3>";
	        echo "<ul id='drawer_list'>";
	        while($row = $result->fetch_assoc()) {
	        	echo "<li>";
	        	echo "<img class='drawer_item' src='uploads/{$row['filename']}'>";
	        	echo "</li>";
	        }
	        echo "</ul>";
	        echo "</nav>";
	        echo "</div>";


	    } else {
	        echo "No pieces";
	    }


	    $conn->close();
	    
    ?>

	

	<?php include "footer.php"; ?>

	<button>Upload a Piece</button>