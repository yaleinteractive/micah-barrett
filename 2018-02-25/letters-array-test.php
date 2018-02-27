<!DOCTYPE HTML>
<html>
<head>
<style>
	
</style>
</head>
<body>
	<?php 
		$number = $_GET['number'];
		$word = $_GET['word'];
		$counter = 1;

		$width = $number * 2;
		$height = $number * 2;
		
		$str = $word;
		$strlen = strlen($str);
		$amplitude = $number;

		$characters = array(
		 	'A'=> array(
		 			'shape'=>array(
		 				20, 85,
						38, 10,
						75, 10,
						84, 88
		 			),
					'shape'=>array(
						10,50,
						90, 50
					)
				),

		 	'B'=> array(
		 			'shape'=>array(
		 				10, 88,
						8, 14,
						60, 9,
						77, 32,
						9, 42,
						85, 50,
						88, 90,
						28, 77,
						13, 90
		 			)
			 )
		);

		function drawLetter($character){
			global $number;
			echo '<svg class="'.$character.'" viewBox="0 0 100 100" stroke-width="40">';
			echo '<polyline points="';

			echo '"/>';
			echo '</svg>';
		}



		for ($i=0; $i <= count($characters['B']['shape']); $i++) { 
			echo 'shape ';
		}





	 ?>


</body>
</html>