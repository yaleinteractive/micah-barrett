<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/site.css">
<style>
	body{
		--gray:#8c7e6b;
		--red:#f25440;
		--green:#69ac61;
		--gold:#7e5b2e;
		--black:#282828;
	}
	img{
		mix-blend-mode: multiply;
		max-width:100%;
		position:fixed;
		z-index:0;
		/*transition:all 0.4s ease-in-out;*/
	}

	img.fixed{
		position:fixed;

	}

	nav{
		position:fixed;
		display:flex;
		flex-direction:column;
		z-index:10;
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

	#gold{
		background:var(--gold);
		border:1px solid var(--gold);

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

	#scramble{
		border:1px solid black;
	}
	.hidden{
		display:none;
	}
</style>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 
</head>
<body>
	<img class="plate green" src="green.jpg" alt="">
	<img class="plate gray" src="gray.jpg" alt="">
	<img class="plate gold" src="gold.jpg" alt="">
	<img class="plate black" src="black.jpg" alt="">
	<img class="plate red" src="red.jpg" alt="">

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
		<button class="color-plate" id="green"></button>
		<button class="color-plate" id="red"></button>
		<button class="color-plate" id="gray"></button>
		<button class="color-plate" id="gold"></button>
		<button class="color-plate" id="black"></button>
		<button id="reset">&#10228;</button>
		<button id="scramble">⤰</button>
		<button id="disassmble">⤰</button>
	</nav>

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
			$('#gray').click(function(){
				$('.gray').toggleClass('hidden');
			});
			$('#gold').click(function(){
				$('.gold').toggleClass('hidden');
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