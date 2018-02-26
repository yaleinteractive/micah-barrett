<!DOCTYPE HTML>
<html>
<head>
<title>Overlap</title>
<style>
	body{
		/*display:flex;*/
		/*flex-wrap: wrap;*/
		background:blue;
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
		$amplitude = $number;

		$characters = array(
			'A'=> array(
				20, 85,
				38, 10,
				75, 10,
				84, 88
			),
			'B'=> array(
				10, 88,
				8, 14,
				60, 9,
				77, 32,
				9, 42,
				85, 50,
				88, 90,
				28, 77,
				13, 90
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
				70, 79, 
				22, 87, 
				19, 14, 
				72, 32, 
				70, 79
			),
			'E'=>array(
				82, 14,
				8, 10, 
				8, 83,
				75,84 
			),
			'F'=>array(
				rand(55,65), rand(10,15),
				rand(5,10),rand(10,20),
				rand(15,20),rand(70,90)
			),
			'G'=>array(
				50, 58,
				85, 51, 
				78, 85,
				38, 84,
				18, 77,
				9, 42,
				50, 10,
				77, 37
			),
			'H'=>array(
				3, 3, 10, 92

			),
			'I'=>array(
				5, 5, 90, 10
			),
			'J'=>array(
				 5, 50, 
				25, 80, 
				45, 90, 
				80, 85, 
				90, 50, 
				90, 5
			),
			'L'=>array(
				10, 10, 15, 50, 11, 90, 50, 84, 75, 91, 70, 70
			),
			'M'=>array(
				15, 80, 
				8, 45, 
				12, 14, 
				32, 19, 
				28, 42, 
				26, 85, 
				40, 88, 
				42,50, 
				51, 10, 
				64, 14, 
				70, 55, 
				80, 90 
			),
			'N'=>array(
			 10, 90, 
			 12, 35, 
			  8, 10, 
			 25, 15, 
			 45, 60, 
			 39, 85, 
			 59, 90, 
			 80, 80, 
			 75, 55, 
			 80, 40, 
			 90, 10	
			),
			'O'=>array(
				45, 10, 
				10, 20, 
				15, 50, 
				10, 90, 
				50, 85, 
				90, 90, 
				88, 49, 
				90, 10, 
				45, 10
			),
			'P'=>array(
				10, 90, 
				12, 30, 
				10, 10, 
				55, 14, 
				90, 45, 
				85, 55, 
				45, 65, 
				10, 40
			),
			'R'=>array(
				10, 90, 
				15, 40, 
				10, 12, 
				30, 15, 
				50, 10, 
				75, 25, 
				80, 40, 
				40, 55, 
				10, 50, 
				30, 50, 
				70, 70, 
				80, 90
			),
			'S'=>array(
				20, 55, 
				10, 80, 
				50, 90, 
				70, 80, 
				90, 50, 
				50, 45, 
				20, 30, 
				40, 10, 
				50, 15, 
				70, 20, 
				80, 30 
			),
			'U'=>array(
				10, 10,
				12, 55,
				10, 84,
				35, 87,
				75, 83,
				80, 45,
				75, 14
			),
			'V'=>array(
				10, 10,
				15, 45,
				45, 90,
				82, 55,
				85, 12
			),
			'W'=>array(
				15, 10,
				16, 60,
				12, 80,
				28, 82,
				35, 82,
				42, 12,
				58, 18,
				62, 84,
				79, 82,
				88, 60,
				82, 10	
			),
			'Z'=>array(
				10, 10,
				55, 15,
				85, 11,
				82, 32,
				45, 55,
				12, 75,
				15, 85,
				65, 80,
				82, 85
			)
		);
		

		// loop through all the coordinates within the supplied character
		function getCoordinates($char){
			global $characters;
			global $amplitude;
			for ($i=0; $i <=count($characters[$char]); $i++ )
				echo $characters[$char][$i] + rand(-$amplitude, $amplitude)." ";

		}

		// draw the SVG based on the selected character
		function drawLetter($character){
			global $number;
			echo '<svg class="'.$character.'" viewBox="0 0 100 100" stroke-width="40">';
			echo '<polyline points="';
			getCoordinates($character);
			echo '"/>';
			echo '</svg>';
		}


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