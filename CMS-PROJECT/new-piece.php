<?php 
	include "connect.php";
	include "header.php";
	$title = $POST['title'];
	$filename = $_POST['filename'];
	$uploaded_date = time();
	$updated_date = time();
	$sql = "INSERT into pieces (title, filename) VALUES($title,$filename);";

	echo $uploaded_date;



	
	include "footer.php";

 ?>

 <form method="POST">
 	<input type="text" name="title">
 	<input type="text" name="filename">
	<button type="submit" name="submit">upload</button>
 </form>