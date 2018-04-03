<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/site.css">
<style>
	body{
		--yellow:#ffde00;
		--red:#e91503;
		--green:#0ba6ab;
		--blue:#0278e6;
		--black:#282828;
		--violet:#9a35ec;
	}
	img{
		position:fixed;
		mix-blend-mode: multiply;
		max-width:80%;
		/*transition:all 0.4s ease-in-out;*/
	}

	nav{
		position:fixed;
		display:flex;
		flex-direction:column;
	}

	button{
		border-radius:0;
		border:none;
		padding:1em;
		height:10vh;
	}

	button:active{
		transform:scale(0.9);
	}

	button:focus{
		outline:1px solid white;
	}

	button.deactivated{
		background:white!important;
	}

	#green{
		background:var(--green);
		border:1px solid var(--green);
	}
	#red{
		background:var(--red);
		border:1px solid var(--red);
	}

	#blue{
		background:var(--blue);
		border:1px solid var(--blue);

	}

	#black{
		background:var(--black);
		border:1px solid var(--black);

	}

	#yellow{
		background:var(--yellow);
		border:1px solid var(--yellow);

	}

	#violet{
		background:var(--violet);
		border:1px solid var(--violet);
	}
	
	#reset{
		border:1px solid black;
	}
	.hidden{
		display:none;
	}
</style>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 
</head>
<body>

	<img class="plate blue" src="img/bird/bird-red.jpg" alt="">
	<img class="plate blue" src="img/pot/pot-red.jpg" alt="">
	<img class="plate blue" src="red.jpg" alt="">





	
	

	

	<?php include "nav.php"; ?>
	<script>
		$( document ).ready(function() {
			$('img').draggable();
			$('#green').click(function(){
				$('.green').toggleClass('hidden');
			});
			$('#red').click(function(){
				$('.red').toggleClass('hidden');
			});
			$('#yellow').click(function(){
				$('.yellow').toggleClass('hidden');
			});
			$('#blue').click(function(){
				$('.blue').toggleClass('hidden');
			});
			$('#black').click(function(){
				$('.black').toggleClass('hidden');
			});
			$('#violet').click(function(){
				$('.violet').toggleClass('hidden');
			});

			$('#reset').click(function(){
				$('img').css('top','0');
				$('img').css('left','0');
			});

			$('.color-plate').click(function(){
				$(this).toggleClass('deactivated');
			});
		});


		$('#scramble').click(function(){
			$('.plate').each(function(){
				var top = getRandomInt(-200, window.innerHeight);
				var left = getRandomInt(-200, window.innerWidth);
				$(this).css('top', top);
				$(this).css('left', left);
			});
		});


		function getRandomInt(min, max) {
			  min = Math.ceil(min);
			  max = Math.floor(max);
			  return Math.floor(Math.random() * (max - min)) + min; //The maximum is exclusive and the minimum is inclusive
		}

	</script>

	 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>
</html>