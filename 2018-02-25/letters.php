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
			)
		);
		$b = array(
			rand(10,13), rand(95,98),
			rand(4,7), rand(10,14),
			rand(60,65), rand(5,9),
			rand(70,77), rand(30,35),
			rand(9,12), rand(40,47),
			rand(85,88), rand(50,55),
			rand(90,95), rand(90,96),
			rand(28,32), rand(77,80),
		);

		$a = array(
			rand(18,24), rand(90,99),
			rand(38,44), rand(4,10),
			rand(70,80), rand(7,10),
			rand(84,92), rand(93,98)
		);

		$c = array(
			rand(70,72), rand(58,73), 
			rand(70,75), rand(80,88), 
			rand(20,24), rand(73,79), 
			rand(18,20), rand(22,27), 
			rand(77,80), rand(10,20), 
			rand(64,70), rand(43,48)
		);

		$d = array(
			rand(68,72), rand(78,84), 
			rand(20,24), rand(87,91), 
			rand(19,23), rand(6,9), 
			rand(72,77), rand(27,32), 
			rand(70,75), rand(79,83)

		);

		$g = array(
			rand(48,52), rand(55,63),
			rand(85,90),rand(48,52), 
			rand(78,82),rand(85,87),
			rand(38,44),rand(84,92),
			rand(18,24),rand(77,86),
			rand(8,14),rand(38,45),
			rand(44,55),rand(7,13),
			rand(77,85),rand(28,37)
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
			drawLetter("$word[$i]");
		}		




	 ?>
	<!-- 
	<svg class="A" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polyline points="
			<?php 
				foreach ($a as $x){
					echo "$x ";
				}
			 ?>
		"/>
		<polyline points="20 50 81 50"/>
	</svg>
	
	<svg class="B" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polygon points="
			<?php  
				foreach ($b as $x) {
					echo "$x ";
				}
			?>
		"/>
	</svg>	


	<svg class="C" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polyline points="<?php  
				foreach ($c as $x) {
					echo "$x ";
				}
			?>"/>
	</svg>

	<svg class="D" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polygon points="<?php  
				foreach ($d as $x) {
					echo "$x ";
				}
			?>"/>
	</svg>
	
	<svg class="E" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polyline points="82 20 5 10 5 95 85 90 "	/>
		<polyline points="4 55 64 45" />
	</svg>

	<svg class="F" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polyline points="60 15 10 10 15 90" />
		<polyline points="50 30 10 30 "/ >
	</svg>
	<svg class="G" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polyline points="<?php  
				foreach ($g as $x) {
					echo "$x ";
				}
			?>"/>
	</svg>

	<svg class="H" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polyline points="3 3 10 92" />
		<polyline points="90 3 80 92" />
		<polyline points="5 50 88 55"/>
	</svg>

	<svg class="I" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polyline points="5 5 90 10"/>
		<polyline points="50 5 55 90"/>
		<polyline points="5 85 95 80"/>
	</svg>
	
	<svg class="J" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polyline points="5 50 25 80 45 90 80 85 90 50 90 5" />
	</svg>

	<svg class="K" viewBox="0 0 100 100" stroke-width="<?php echo $number ?>">
		<polyline points="5 5 10 50 6 90"/>
		<polyline points="90 5 50 40 5 50 70 70 90 90"/>
	</svg> -->

	<nav class="controller-nav">
		 <form class="controls" method="get">
			<input name="word" type="text" value="<?php echo $word ?>" >
			<input name="number" type="number" value="<?php echo $number ?>" >

			<input type="submit">
		</form>
	</nav>


</body>
</html>