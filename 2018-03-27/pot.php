<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/site.css">
<style>
	body{
		--gray:#8c7e6b;
		--red:#f25440;
		--blue:blue;
		--yellow:yellow;
		--black:#282828;
	}
	img{
		position:fixed;
		mix-blend-mode: multiply;
		max-width:100%;
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

	#blue{
		background:var(--blue);
		border:1px solid var(--blue);
	}
	#red{
		background:var(--red);
		border:1px solid var(--red);
	}

	#yellow{
		background:var(--yellow);
		border:1px solid var(--yellow);

	}

	#black{
		background:var(--black);
		border:1px solid var(--black);

	}

	#gray{
		background:var(--gray);
		border:1px solid var(--gray);

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
	<img class="plate black" src="img/pot/pot-black.jpg" alt="">
	<img class="plate blue" src="img/pot/pot-blue.jpg" alt="">
	<img class="plate red" src="img/pot/pot-red.jpg" alt="">
	<img class="plate yellow" src="img/pot/pot-yellow.jpg" alt="">
	

	<article class="item-meta-data">
		<ul>
			<li>size:<br> 6" x 4"</li>
			<li>plates:<br> 5</li>
			<li>year:<br> 1910</li>
			<li>collection:<br> Greenberg Collection</li>
			<li>institution:<br> Haas Arts Special Collections</li>
		</ul>
	</article>
	

	<nav>
		<button class="color-plate" id="black"></button>
		<button class="color-plate" id="red"></button>
		<button class="color-plate" id="blue"></button>
		<button class="color-plate" id="yellow"></button>
		<button id="reset">&#10228;</button>
		<button id="scramble">⤰</button>
		
	</nav>

	<?php include "nav.php"; ?>
	<script>
		$( document ).ready(function() {
			$('img').draggable();
			$('#blue').click(function(){
				$('.blue').toggleClass('hidden');
			});
			$('#red').click(function(){
				$('.red').toggleClass('hidden');
			});
			$('#gray').click(function(){
				$('.gray').toggleClass('hidden');
			});
			$('#yellow').click(function(){
				$('.yellow').toggleClass('hidden');
			});
			$('#black').click(function(){
				$('.black').toggleClass('hidden');
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