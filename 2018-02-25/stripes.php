<!DOCTYPE html>
<html>
<head>
<style>
	body{
		background:black;
	}
	.controller-nav{
		position:fixed;
		top:0;
		z-index:99999;
	}
	div{
		background:white;
		width:50vw;
	}

	div:nth-child(even){
		margin-left:50vw;
	}
</style>
</head>
<body>
	<?php 
		$letter = $_GET['letter'];
		$number = $_GET['number'];

		$counter = 1;
		$height = $number;

		$growing = True;

		while ($counter <= $number) {
			$rotation = rand(0,360);

			echo '<div style="height:'.$height.'vh;"></div>';
			$height = $height * 0.75;
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