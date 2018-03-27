<!DOCTYPE html>
<html>
<head>
	<style>
		h1{

			line-height:0.8;
			margin-top:0.25em;
			font-family:"letter gothic std";
			font-weight:normal;
			/*text-decoration:underline;*/
		}

		svg{
			stroke:black;
		}
	</style>
</head>
<body>
	<?php 

		$seconds = date("s");
		$dayOfYear = date("z");
		$weekDay = date("l");

		$counter = 0;

		// while ($counter <= $seconds) {
		// 	echo '<h1 style="font-size:'.$seconds.'px; transform:rotate('.$seconds.'deg);">'.$weekDay.'</h1> ';
		// 	$counter++;
		// }

		echo "<svg viewBox='0 0 100 100' stroke-Width='".$seconds."'>";
		while ($counter <= $seconds) {
			echo '<polyline points="0 0 '.$seconds.' '. $seconds.'"></polyline>';
			$counter++;
		}
		echo "</svg>";
	 ?>

	<svg viewBox="0 0 400 400" strokeWidth="1">
		<polyline points="0 0 60 60"></polyline>		
	</svg>
</body>
</html>