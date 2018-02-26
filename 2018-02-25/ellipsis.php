<!DOCTYPE HTML>
<html>
<head>
<title>Overlap</title>
<style>
	body{
		display:flex;
		flex-wrap: wrap;
		background:blue;
	}
	.shape{
		height:40vh;
		border:1px solid blue;
		background:white;
		border-radius:50%;
		z-index:10;
		transition:all 0.2s ease-in-out;
	}

	.shape:hover{
		transform:scaleX(1.4);
	}
	
	.shape:nth-child(odd){
		background:black;
		z-index:-10;
	}

	.shape:nth-child(odd):hover{
		transform:scaleX(1.4);
	}

	.controller-nav{
		position:fixed;
		z-index:1000000;
	}

	.letter{
		font-size:40vw;
		color:black;
		position:fixed;
		width:100vw;
		text-align:center;
		margin:0;
	}
</style>
</head>
<body>
	
	<?php
		$number = $_GET['number'];
		$letter = $_GET['letter'];
		$counter = 1;

		$width = $number;
		$shrinking = False;

		function drawCircles($diameter){
			echo '<div class="shape" style="width:'.$diameter.'vw;">'.$letter.'</div>';
		}

		echo '<div class="letter">'.$letter.'</div>';


		while ( $counter <= $number) {
			if ($shrinking == True) {
				$width = $width / 2;
			}
			
			if ($shrinking == False){
				$width = $width * 2;
			}

			if ($width <= 1) {
				$shrinking = False;
			} else if($width >=100){
				$shrinking = True;
			}

			drawCircles($width);
			$counter++;


		}


	 ?>
	

	<nav class="controller-nav">
		<!-- <a class="controller-nav__trigger">^</a> -->
	
		 <form class="controls" method="get">
			<input name="letter" type="text" value="<?php echo $letter ?>" >
			<input name="number" type="number" value="<?php echo $number ?>" >

			<input type="submit">
		</form>
	</nav>


</body>
</html>