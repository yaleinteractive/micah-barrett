<!DOCTYPE HTML>
<html>
<head>
<title>Overlap</title>
<style>
	body{
		/*display:flex;*/
		/*flex-wrap: wrap;*/
		margin:2vw;
		--color-one:rgb(255,255,255);
		--color-two:rgb(0,0,0);
		--color-three:rgb(0,0,200);
		background:var(--color-one);
	}
	
	.controller-nav{
		position:fixed;
		z-index:1000000;
		bottom:0;
		left:0;
		background:var(--color-one);
		/*border-top:2px solid var(--color-three);*/
		width:100vw;
		padding:0.5em;
	}

	label{
		font-family:menlo;
		color:var(--color-three);
	}

	.container{
		/*display:flex;*/
	}
	
	.letter{
		font-size:40vw;
		color:black;
		position:fixed;
		width:100vw;
		text-align:center;
		margin:0;
	}
	input{
		padding:0.5em;
	}

	input:focus{
		outline:1px solid var(--color-two);
	}

	input[type=text]{
		width:8em;
	}
	
	input[type=number],
	input[type=text]{
		border:none;
		font-family:menlo;
		background:var(--color-one);
		font-size:1em;
		color:var(--color-two);
	}
	
	input[type=submit]{
		box-sizing:border-box;
		border-radius: 0px;
	    border: none;
	    padding-left:1em;
	    padding-right:1em;
	    font-family:menlo;
	    font-size:1em;
	    color:var(--color-one);
	    background:var(--color-three);

	}

	input[type=submit]:active{
		transform:scale(0.95);
		background:var(--color-two);

	}

	input[type=number]{
		width:3em;
	}

	svg{
		stroke:var(--color-two);
		fill:none;
		height:100%;
		vector-effect: non-scaling-stroke;
		width:calc(18vw);
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
		include '../nav.php';
	 ?>

	
	<?php
		$number = $_GET['number'];
		$word = $_GET['word'];
		$counter = 1;

		$width = $number * 2;
		$height = $number * 2;
		
		$str = $word;
		$strlen = strlen($str);
		$amplitude = $number;

		$thickness = $_GET['thickness'];

		$characters = array(
			'A'=> array(
				20, 85,
				38, 10,
				75, 10,
				84, 88,
				75,50,
				32,55
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
				72, 58, 
				75, 80, 
				24, 73, 
				18, 22, 
				77, 14, 
				64, 43
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
				12, 50,
				80, 55,
				75, 65,
				10, 70,
				8, 85,
				50, 90,
				82,85
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
				3, 3, 
				10, 92,
				10,50,
				80,50,
				85,90,
				85,10

			),
			'I'=>array(
				5, 5, 
				50,5,
				48,90,
				10,90,
				48,90,
				90,90,
				48,90,
				50,5,
				90,5
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
				10, 10, 
				15, 50, 
				11, 90, 
				50, 84, 
				75, 91, 
				70, 70
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
			'T'=>array(
				8,10,
				50,12,
				55,90,
				50,12,
				85,8
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
			'Y'=>array(
				10,10,
				14,34,
				14,50,
				50,60,
				50,90,
				50,60,
				70,50,
				80,20,
				90,10
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
			global $thickness;
			echo '<svg class="'.$character.'" viewBox="0 0 100 100" stroke-width="'.$thickness.'">';
			echo '<polyline points="';
			getCoordinates($character);
			echo '"/>';
			echo '</svg>';
		}


				
	 ?>
	<div class="container">	
	<?php 
	// split the input into indivudal characters and draw them in the DOM
		for ($i=0; $i < $strlen ; $i++) { 
			drawLetter(strtoupper($word[$i]));
		}

	 ?>
	</div>

	<nav class="controller-nav">
		 <form class="controls" method="get">
		 	<label>text
				<input name="word" label="text" type="text" value="<?php echo $word ?>" >
			</label>
			<label> wiggle
				<input name="number" type="number" value="<?php echo $number ?>" >
			</label>
			<label> thickness
				<input name="thickness" type="number" value="<?php echo $thickness ?>" >
			</label>

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