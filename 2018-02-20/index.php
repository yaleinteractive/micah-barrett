<html>
<head>
<title></title>
<style>
	
	.a{
		background:red;
		width:10em;
		height:2em;
	}
	
	div{
		background:blue;
		margin-bottom:1em;
		width:100vw;
		height:2em;
		transform-origin:0% 0%;
	}
	
	span{
		display:inline-block;
		font-family:'Gothic 523';
		letter-spacing: -0.04em;
	}
</style>
</head>
<body>
	<?php 
		$letter = $_GET['letter'];
		$number = $_GET['number'];
		$size = $_GET['size'];

		$rotation = $number;

		$counter = 1;

		while ($counter <= $number) {
			// echo "$letter ";
			echo '<span'. ' style="transform:rotate('.$rotation. 'deg);'. 'font-size:'. $size .'em;'. '">'. $letter. ' </span>';
			$counter++;
			// $rotation = $rotation + 20;
			$rotation++;
			// $size++;
		}
	 ?>
</body>
</html>