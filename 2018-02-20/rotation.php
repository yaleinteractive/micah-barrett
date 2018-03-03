<html>
<head>
<title></title>
<style>
	
	body{
		margin:0;
	}
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
	
	.controller-nav{
		position:fixed;
		bottom:0;
	}

	.controller-nav.active{
		transform:translateY(2em);
	}

	.controller-nav__trigger{
		width:100%;
		display: block;
		padding:0.5em;
		cursor:pointer;
		text-align:center;
		background:red;
	}

	.controls{
		/*display:flex;*/
		width:100vw;
		z-index:10;
	}

	label{
		font-family:menlo;
	}

	input{
		flex:1;
		font-family:menlo;
		font-size:1em;
	}
	
	input:nth-child(even){
		border-left:none;
		border-right:none;
		border-top:1px solid rgb(238,238,238);
		border-bottom:1px solid rgb(238,238,238);
	}

	input:focus{
		outline:1px solid red;
		color:red;

	}

	input[type=submit]{
		box-sizing:border-box;
		border-radius: 0px;
	    border: 1px solid gray;
	    width: 80px;
	    height:25px;
	}

	input[type=submit]:active{
		background:red;
		transform:scale(0.94);
		color:white;
	}

	input[type=submit]:focus{
		
	}
</style>
</head>
<body>
	<?php 
		include '../nav.php';
	 ?>

	
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
	<nav class="controller-nav">

	
		 <form class="controls" method="get">
		 	<label> Letter
				<input name="letter" type="text" value="<?php echo $letter ?>" >
			</label>
			<label > Number
				<input name="number" type="number" value="<?php echo $number ?>" >
			</label>
			<label> Size
				<input name="size" type="number" value="<?php echo $size ?>">
			</label>
			<input type="submit">
		</form>
	</nav>

	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('.controller-nav__trigger').click(function(){
				$('.controller-nav').toggleClass('active');
				$('.controller-nav__trigger').toggleClass('active');
			});
		});
		
	</script>
</body>
</html>