<html>
<head>
	<title>New Event</title>

</head>
<body>
	<?php 
		include "connect.php";

		$date = $_GET['date'];

		if (strtotime($date) < time()){
			$past = true;

		} else{
			$past = false;
		}

		$conn->close();
	
			if($past){
				echo "<h2>Advertise an upcoming event</h2>";
			} else{
				echo "<h2>Describe a past event</h2>";
			}
	 	?>


	 <form method="post">
	 	<label >
	 		Title <input type="text" name="title"><br>
	 	</label>
	 	<label>
	 		Date <input type="date" name="date" value="<?= $date ?>"><br>
	 	</label>
	 	<label for="">
	 		Time <input type="time" name="time"><br>
	 	</label>
	 	<?php if ($past){ ?>
	 	 <label>what actually happened?<br>
			<textarea name="description" cols="30" rows="10"></textarea>
	 	 </label>
	 	 <label>Documentary photo<br>
			<input type="file" name="image"><br>
	 	 </label>
	 	 <?php } ?>
	 	 <input type="submit" value="add">
	 </form>

	 <a href="index.php">Cancel</a>
		 
		 
</body>
</html>