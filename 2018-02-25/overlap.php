<!DOCTYPE HTML>
<html>
<head>
<title>Overlap</title>
<style>
	body{
		background:rgb(230,230,230);
	}
	div{
		position:fixed;
		width:100vw;
		margin-top:10vh;
		transform-origin:50% 50%;
		text-align:center;
		font-size:40vw;
		font-family:"Gothic 523";
		mix-blend-mode: screen;
		filter:blur(50px);


	}
	.yellow{
		color:yellow;
	}
	.magenta{
		color:magenta;
	}
	.cyan{
		color:cyan;
	}

	.controller-nav{
		position:fixed;
		z-index:1000;
	}
</style>
</head>
<body>
		
	<?php 
		include '../nav.php';
	 ?>


	<?php
		$number = $_GET['number'];
		$letter = $_GET['letter'];

		$colors = array(
			'cyan',
			'magenta',
			'yellow',
		);

		$counter = 1;

		echo "$rotation";
		while ($counter <= $number) {
			$rotation = rand(0,360);
			$color = $colors[rand(0,count($colors)-1)];
			echo '<div class="'.$color.'" style="transform:rotate('.$rotation.'deg);">'.$letter.'</div>';
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