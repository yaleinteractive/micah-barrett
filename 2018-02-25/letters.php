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
		z-index:1000;
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
	@media print{

		svg{
			width:170pt;
		}
		.controller-nav{
			display:none;
		}

		.global-nav__trigger{
			display:none;
		}

		.global-nav{
			display:none;
		}
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
				20, 80,
				20, 70,
				20, 50,
				20, 30,
				20, 10,
				30, 10,
				50, 10,
				70, 10,
				80, 10,
				80, 30,
				80, 60,
				80, 80,
				80, 60,
				80, 50,
				70, 50,
				50, 50,
				30, 50,
				20, 50
			),
			'B'=> array(
				10, 80,
				10, 70,
				10, 40,
				10, 10,
				30, 10,
				55, 10,
				70, 10,
				70, 20,
				70, 40,
				10, 40,
				80, 40,
				80, 80,
				70, 80,
				40, 80,
				10, 80,
				10, 80
			),
			'C'=>array(
				80, 55, 
				80, 80, 
				10, 80, 
				10, 10, 
				80, 10, 
				80, 35
			),
			'D'=>array(
				10, 80,
				10, 50,
				10, 30,
				10, 10,
				40, 10,
				70, 10,
				80, 10,
				80, 30,
				80, 80,
				50, 80,
				10, 80 
				
			),
			'E'=>array(
				80, 10,
				60, 10,
				30, 10,
				10, 10,
				10, 45,
				30, 45,
				60, 45,
				70, 45,
				20, 45,
				10, 45,
				10, 80,
				30, 80,
				60, 80,
				80, 80
			),
			'F'=>array(
				10, 80,
				10, 40,
				10, 20,
				10, 10,
				80, 10,
				50, 10,
				10, 10,
				10, 40,
				30, 40,
				60, 40
			),
			'G'=>array(
				80, 34,
				80, 10,
				60, 10,
				30, 10,
				10, 10,
				10, 20,
				10, 70,
				10, 80,
				30, 80,
				60, 80,
				80, 80,
				80, 55,
				50, 55,
				30, 55

			),
			'H'=>array(
				10, 10,
				10, 30,
				10, 55, 
				10, 90,
				10, 50,
				30, 50,
				40, 50,
				70, 50,
				80, 50,
				80, 90,
				80, 75,
				80, 25,
				80, 10

			),
			'I'=>array(
				10, 10,
				30, 10,
				40, 10,
				50, 10, 
				80, 10,
				70, 10,
				55, 10,
				45, 10,
				45, 30,
				45, 50,
				45, 70,
				45, 80,
				10, 80,
				30, 80,
				50, 80,
				75, 80,
				80, 80

			),
			'J'=>array(
				 10, 50,
				 10, 80,
				 20, 80,
				 30, 80,
				 40, 80,
				 80, 80,
				 80, 70,
				 80, 55,
				 80, 33,
				 80, 10
			),
			'K'=>array(
				10, 10,
				10, 80,
				10, 50,
				80, 20,
				25, 43,
				80, 70
			),
			'L'=>array(
				10, 10, 
				10, 50,
				10, 60,
				10, 75, 
				10, 80, 
				50, 80, 
				75, 80, 
				70, 80
			),
			'M'=>array(
				10, 80,
				10, 70,
				10, 60,
				10, 50,
				10, 30,
				10, 10,
				30, 10,
				45, 10,
				45, 20,
				45, 40,
				45, 70,
				45, 80,
				45, 70,
				45, 50,
				45, 30,
				45, 10,
				50, 10,
				70, 10,
				75, 10,
				80, 10,
				80, 20,
				80, 30,
				80, 50,
				80, 80
			),
			'N'=>array(
				 10, 90,
				 10, 60,
				 10, 55,
				 10, 20, 
				 10, 10, 
				 80, 80,
				 80, 75,
				 80, 50,
				 80, 30,
				 80, 10
			),
			'O'=>array(
				80, 10,
				70, 10,
				30, 10,
				10, 10,
				10, 30,
				10, 45,
				10, 70,
				10, 80,
				30, 80,
				50, 80,
				60, 80,
				80, 80,
				80, 70,
				80, 15,
				80, 10

			),
			'P'=>array(
				10, 90,
				10, 70,
				10, 25,
				10, 15, 
				10, 10,
				30, 10,
				55, 10,
				70, 10,
				78, 10,
				80, 10,
				80, 14,
				80, 28,
				80, 40,
				80, 50,
				60, 50,
				30, 50,
				10, 50

			),
			'Q'=>array(
				80, 70,
				80, 50,
				80, 30,
				80, 20,
				80, 10,
				10, 10,
				10, 20,
				10, 50,
				10, 60,
				10, 70,
				50, 70,
				45, 50,
				60, 90,
				50, 70,
				80, 70 
			),
			'R'=>array(
				10, 90, 
				10, 40, 
				10, 10, 
				30, 10, 
				50, 10, 
				80, 10, 
				80, 45, 
				40, 45, 
				10, 45, 
				50, 45,  
				80, 90
			),
			'S'=>array(
				10, 60,
				10, 90,
				20, 90,
				40, 90,
				50, 90,
				80, 90,
				80, 75,
				80, 60,
				50, 50,
				10, 38,
				10, 20,
				10, 10,
				30, 10,
				40, 10,
				50, 10,
				70, 10,
				80, 10,
				80, 30,
				80, 35


			),
			'T'=>array(
				5,10,
				30,10,
				60,10,
				70,10,
				90,10,
				45,10,
				45,40,
				45,55,
				45,70,
				45,85
			),
			'U'=>array(
				10, 10,
				10, 55,
				10, 74,
				10, 80,
				14, 80,
				35, 80,
				66, 80,
				80, 80,
				80, 45,
				80, 22,
				80, 10
			),
			'V'=>array(
				10, 10,
				15, 45,
				45, 90,
				82, 55,
				85, 12
			),
			'W'=>array(
				10, 10,
				10, 60,
				10, 80,
				45, 80,
				45, 10,
				45, 80,
				80, 80,
				80, 60,
				80, 10	
			),
			'X'=>array(
				20, 10,
				20, 45,
				10, 45,
				10, 90,
				10, 45,
				70, 45,
				70, 90,
				70, 45,
				50, 45,
				50, 10,
			),
			'Y'=>array(
				10,10,
				10,34,
				10,60,
				45,60,
				45,90,
				45,60,
				80,60,
				80,20,
				80,10
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