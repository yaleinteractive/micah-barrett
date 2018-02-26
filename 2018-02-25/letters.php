<!DOCTYPE HTML>
<html>
<head>
<title>Overlap</title>
<style>
	body{
		/*display:flex;*/
		/*flex-wrap: wrap;*/
		background:white;
	}
	
	.controller-nav{
		position:fixed;
		z-index:1000000;
		top:0;
		right:0;
	}

	.letter{
		font-size:40vw;
		color:black;
		position:fixed;
		width:100vw;
		text-align:center;
		margin:0;
	}
	svg{
		stroke:black;
		fill:none;
		max-height:90vh;
		vector-effect: non-scaling-stroke;
		max-width:30vw;
	}

	svg:hover{
		cursor:move;

	}

	svg polyline,
	svg polygon{
		vector-effect: non-scaling-stroke;
	}
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

		$characters = array(
			'A'=> array(
				rand(18,24), rand(90,99),
				rand(38,44), rand(4,10),
				rand(70,80), rand(7,10),
				rand(84,92), rand(93,98)
			),
			'B'=> array(
				rand(10,13), rand(95,98),
				rand(4,7), rand(10,14),
				rand(60,65), rand(5,9),
				rand(70,77), rand(30,35),
				rand(9,12), rand(40,47),
				rand(85,88), rand(50,55),
				rand(90,95), rand(90,96),
				rand(28,32), rand(77,80),
				rand(10,13), rand(95,90)
			),
			'C'=>array(
				rand(70,72), rand(58,73), 
				rand(70,75), rand(80,88), 
				rand(20,24), rand(73,79), 
				rand(18,20), rand(22,27), 
				rand(77,80), rand(10,20), 
				rand(64,70), rand(43,48)
			),
			'D'=>array(
				rand(68,72), rand(78,84), 
				rand(20,24), rand(87,91), 
				rand(19,23), rand(6,9), 
				rand(72,77), rand(27,32), 
				rand(70,75), rand(79,83)
			),
			'E'=>array(
				rand(82,83), rand(10,20),
				rand(3,5), rand(7,10), 
				rand(5,10), rand(90,95),
				rand( 75,85),rand(84,94) 
			),
			'F'=>array(
				rand(55,65), rand(10,15),
				rand(5,10),rand(10,20),
				rand(15,20),rand(70,90)
			),
			'G'=>array(
				rand(48,52), rand(55,63),
				rand(85,90),rand(48,52), 
				rand(78,82),rand(85,87),
				rand(38,44),rand(84,92),
				rand(18,24),rand(77,86),
				rand(8,14),rand(38,45),
				rand(44,55),rand(7,13),
				rand(77,85),rand(28,37)
			),
			'H'=>array(
				3, 3, 10, 92

			),
			'I'=>array(
				5, 5, 90, 10
			),
			'J'=>array(
				5, 50, 25, 80, 45, 90, 80, 85, 90, 50, 90, 5
			),
			'L'=>array(
				10, 10, 15, 50, 11, 90, 50, 84, 75, 91, 70, 70
			),
			'M'=>array(
				10, 90, 8, 50, 12, 10, 33, 14, 28, 45, 25, 85, 40, 88, 42,50, 51, 10, 64, 14, 70, 55, 80, 90 
			),
			'O'=>array(
				45, 10, 10, 20, 15, 50, 10, 90, 50, 85, 90, 90, 88, 49, 90, 10, 45, 10
			),
			'S'=>array(
				20,55, 10,80, 50, 90, 70, 80, 90, 50, 50, 45, 20, 30, 40, 10, 50, 15, 70, 20, 80, 30 
			)
		);
		

		// loop through all the coordinates within the supplied character
		function getCoordinates($char){
			global $characters;
			for ($i=0; $i <=count($characters[$char]); $i++ )
				echo $characters[$char][$i]." ";
		}

		// draw the SVG based on the selected character
		function drawLetter($character){
			global $number;
			echo '<svg class="'.$character.'" viewBox="0 0 100 100" stroke-width="'.$number.'">';
			echo '<polyline points="';
			getCoordinates($character);
			echo '"/>';
			echo '</svg>';
		}

		// drawLetter("$word");

		// split the input into indivudal characters and draw them in the DOM
		for ($i=0; $i < $strlen ; $i++) { 
			drawLetter(strtoupper($word[$i]));
		}		




	 ?>

	<nav class="controller-nav">
		 <form class="controls" method="get">
			<input name="word" type="text" value="<?php echo $word ?>" >
			<input name="number" type="number" value="<?php echo $number ?>" >

			<input type="submit">
		</form>
	</nav>
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="crossorigin="anonymous"></script>

  <script>
  	$(document).ready(function(){
  		$('svg').draggable();
  	});
  </script>


</body>
</html>