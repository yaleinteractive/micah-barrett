<!DOCTYPE HTML>
<html>
<head>
<title>Arrays</title>
<style>
	body{
		background:rgb(30,30,30);
		color:white;
		margin:0;

	}

	div{
		width:50vw;
		background:white;
		height:1em;
		color:rgb(30,30,30);
		text-transform:uppercase;
		font-weight:bold;
		
	}

	div:nth-child(even){
		margin-left:50vw;
		text-align:right;
	}

	.controller-nav{
		position:fixed;
		z-index:1000;
		top:0;
	}
	
</style>
</head>
<body>
	
	<?php
		$number = $_GET['number'];
		$letter = $_GET['letter'];

		$counter = 1;
		function drawLines($height){
			$letter = $_GET['letter'];
			echo '<div class="thing'. '" style="height:'.$height.'px; font-size:'.$height.'px;">'.$letter.'</div>';
		}

		while ($counter <= $number) {
			$height = $number;
			drawLines($height);
			$counter++;

		}







	 ?>

	<nav class="controller-nav">
	
		 <form class="controls" method="get">
			<input name="letter" type="text" value="<?php echo $letter ?>" >
			<input name="number" type="number" value="<?php echo $number ?>" >

			<input type="submit">
		</form>
	</nav>

</body>
</html>