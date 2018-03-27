<!DOCTYPE html>
<html>
<head>
	<style>
		h1{
			font-size:200px;
			line-height:0.8;
			margin-top:0.25em;
			font-family:"letter gothic std";
			font-weight:normal;
			/*text-decoration:underline;*/
		}
	</style>
</head>
<body>
	<?php 

		$seconds = date("s");
		$dayOfYear = date("z");

		$br = "<br>";
		echo "<h1 style='color:hsl(290, $seconds%, 50%);'>";
		// day of the month
		echo date("d");
		echo $br;
		// numeric representation day of week
		echo date("w");
		echo $br;
		// day of the year
		echo date("z");
		echo $br;
		// week number
		echo date("W");
		echo $br;
		// seconds
		echo date("s");
		echo "</h1>";
	 ?>


</body>
</html>