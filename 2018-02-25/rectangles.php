<!DOCTYPE HTML>
<html>
<head>
<title>Overlap</title>
<style>
	body{
		display:flex;
		flex-wrap: wrap;
	}
	div{
		height:40vh;
		border:1px solid blue;
	}
</style>
</head>
<body>
	
	<?php
		$number = $_GET['number'];
		$letter = $_GET['letter'];
		$counter = 1;
		$width = $number;
		while ( $counter<= $number) {
		echo '<div style="width:'.$width.'vw;">'.$letter.'</div>';
		$width = $width/2;
		$counter++;
		}

	 ?>



</body>
</html>