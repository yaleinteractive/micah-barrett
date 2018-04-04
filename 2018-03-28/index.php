
	<?php 
		include "header.php";
 		include "connect.php";
 		include "insert.php";

		$sql = "SELECT * FROM pieces ORDER by uploaded_date ASC";
	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
	        // output data of each row
	        while($row = $result->fetch_assoc()) {

			    echo "<div class='wrapper'>";
	        	

	            // echo "<h1>";
	            // echo "{$row['id']} ";
	            // echo "{$row['title']} ";
	            // echo "</h1>";
	            echo "<img class='placed' src='uploads/{$row['filename']}'>";
	            echo "</div>";
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
	        echo "No events";
	    }





       
	        



	    $conn->close();

	    
    ?>
	<?php include "footer.php"; ?>

	<h2>Add a piece</h2>
    <form>
        <label>Title <input type="text" name="title"></label><br>
        <label>Filename <input type="text" name="filename"></label><br>
        <input type="submit" value="Add">
    </form>