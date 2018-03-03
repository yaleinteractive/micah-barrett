<!DOCTYPE html>
<html>
<head>
<style>
	body{
		margin:0;
		--bg-color:rgb(255,255,255);
		--pop-color:rgb(0,0,220);
		background:var(--pop-color);	
	}
	
	div{
		display:inline-block;
		margin-bottom:0;
		margin-top:-4px;
	}
	img{
		width:100%;
		
	}

	.controller-nav{
		position:fixed;
		z-index:999999;
		bottom:0;
		background:var(--pop-color);
		width:100%;
		padding:0.5em;
	}
	
	label,input{
		font-family:menlo;
		font-size:1em;
	}
	
	label{
		color:var(--bg-color);
	}

	input[type=number],
	input[type=text]{
		padding:0.5em;
		border:none;
		background:var(--pop-color);
		color:var(--bg-color);
	}
	input[type=submit]{
		border-radius:0px;
		padding:0.5em 1em;
		background:black;
		color:var(--bg-color);
		border:none;
	}

	input[type=submit]:active{
		transform:scale(0.9);
	}

	input:focus{
		outline:1px solid var(--bg-color);
	}

	@media print{
		body{
			background:none;
			margin:0.125in;
			width:100%;
		}
		.controller-nav{
			display:none;
		}
	}
</style>

</head>
<body>
	<?php 

		$word = $_GET['word'];
		$number = $_GET['number'];
		$size = $_GET['size'];
		$str = $word;
		$strlen = strlen($str);
		

		$counter = 1;
		
		
		
		while ($counter <= $number) {
			for ($i=0; $i < $strlen ; $i++) { 
				// drawUnit(strtoupper($word[$i]));
				echo '<div style="width:'.$size.'vw;">';
				echo '<img src="assets/svg/'.$word[$i].'.svg">';
				echo "</div>";
			}
			$counter++;
		}
	 ?>

	 <nav class="controller-nav">
	 	<form method="get" class="controls">
	 		<label> text
		 		<input name="word" type="text" value="<?php echo $word ?>">
	 		</label>
	 		<label>number	
		 		<input name="number" type="number" value="<?php echo $number ?>">
	 		</label>
	 		<label>size	
		 		<input name="size" type="number" value="<?php echo $size ?>">
	 		</label>
	 		<input type="submit">
	 	</form>
	 </nav>

</body>
</html>