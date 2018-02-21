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
		color:blue;
		mix-blend-mode: multiply;
		line-height:1;
		/*animation: red-to-blue 1s steps(3) infinite;*/
	}

	span:nth-child(odd){
		color:red;
		/*animation: blue-to-red 1s steps(3) infinite;*/

	}
	
	@keyframes blue-to-red{
		from{
			color:blue;
		}to{
			color:red;
		}
	}


	@keyframes red-to-blue{
		from{
			color:red;
		}
		to{
			color:blue;
		}
	}

	.controls{
		display:flex;
		width:100vw;
		position:fixed;
		z-index:10;
		bottom:0;
	}

	input{
		flex:1;
		width:33%;
		font-family:menlo;
		font-size:1em;
	}

	input:active{

	}

	input:focus{
		border:3px solid gray;
		outline:none;
	}

	input[type=submit]{
		box-sizing:border-box;
		border-radius: 0px;
	    border: 1px solid gray;
	    width: 80px;
	    height:25px;
	}

	input[type=submit]:active{
		background:black;
		color:white;
	}

	input[type=submit]:focus{
		
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
		echo $_POST["letter"];
		while ($counter <= $number) {
			// echo "$letter ";
			echo '<span'. ' style="transform:rotate('.$rotation. 'deg);'. 'font-size:'. $size .'em;'. '">'. $letter. ' </span>';
			$counter++;
			// $rotation = $rotation + 20;
			$rotation++;
			// $size++;
		}


	 ?>
	
	 <form class="controls" method="get">
		<input name="letter" type="text" value="<?php echo $letter ?>" >
		<input name="number" type="number" value="<?php echo $number ?>" >
		<input name="size" type="number" value="<?php echo $size ?>">
		<input type="submit">

	</form>
</body>
</html>