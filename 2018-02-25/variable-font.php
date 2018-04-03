<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
	@font-face{
		font-family:"test";
		src:url(assets/fonts/test-light.ttf),
	}
	
	.char{
		font-family:"test";
		font-size:200px;
		font-variation-settings:"brkn" 0;
	}

	.controller-nav{
		position:fixed;
		bottom:0;
		z-index:10;
		padding:1em;
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
		$font_size = $_GET['size'];
		$counter = 1;

		$width = $number * 2;
		$height = $number * 2;
		
		$str = $word;
		$strlen = strlen($str);
		$amplitude = $number;

	 function drawLetter($character){
	 	global $number;
	 	echo "<span class='$character char'";
	 	echo "style='font-size:". $font_size . "em; font-variation-settings:" . '"brkn"'.rand(0,$number)."'";
	 	echo ">$character</span>";
	 }

	 ?>
	<div class="container">
		<?php 
			for($i=0;$i< $strlen ; $i++){
				drawLetter($word[$i]);
			}
		 ?>

		 <?php echo $size ?>
	</div>

	<nav class="controller-nav">
		 <form class="controls" method="get">
		 	<label>text
				<input name="word" label="text" type="text" value="<?php echo $word ?>" >
			</label>
			<label> wiggle
				<input name="number" type="number" max="1000" value="<?php echo $number ?>" >
			</label>
			<label> size
				<input name="size" type="number" max="1000" value="<?php echo $font_size ?>" >
			</label>
			

			<input type="submit">
		</form>
	</nav>
	
</body>
</html>