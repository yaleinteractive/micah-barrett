<!DOCTYPE HTML>
<html>
<head>
<title>Arrays</title>
<style>
	body{
		background:rgb(30,30,30);
	}
	
	div{
		position:fixed;
		background:blue;
		width:40vw;
		height:1em;
		mix-blend-mode: multiply;
	}

	div:nth-child(2){
		background:red;
	}

	.top{
		top:0;
	}

	.bottom{
		bottom:0;
	}

	.left{
		left:0;
	}

	.right{
		right:0;
	}
	
	.forty-five{
		transform:rotate(45deg);
	}
	.twenty-two{
		transform:rotate(22deg);
	}
	.ninety{
		transform:rotate(90deg);
	}
</style>
</head>
<body>
	
	<?php
		$alignments = array(
			'top',
			'left',
			'right',
			'bottom'
		);

		$rotations = array(
			'zero',
			'twenty-two',
			'forty-five',
			'ninety'
		); 
		
		$letter = $_GET['letter'];
		$number = $_GET['number'];

		$counter = 0;

		$alignOne = rand(0,count($alignments));
		$alignTwo = rand(0,count($alignments)); 

		$rotateOne = rand(0,count($rotations)-1);
		echo "$alignOne";
		// echo "$alignTwo";

		echo '<div'.' class="'.$alignments[$alignOne].' '.$rotations[$rotateOne].'"'.'>' .'</div>';
		echo '<div'.' class="'.$alignments[$alignTwo].'"'.'>' .'</div>';



	 ?>



</body>
</html>