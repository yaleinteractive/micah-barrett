<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<style>
	.global-nav{
		position:fixed;
		z-index:9999;
		top:0;
		right:0;
		width:100vw;
		height:100vh;
		background:black;
		transform:translateY(140vh);
		transition:transform 0.4s ease-in-out;


	}
	
	.global-nav.active{
		transform:translateY(0vh);

	}

	.global-nav li{
		list-style:none;
	}
	.global-nav li a{
		display: block;
		font-family:menlo;
		font-size:4em;
		text-decoration:none;
		color:white;
	}
	
	.global-nav li a:visited{
		color:white;
	}
	
	.global-nav li a:hover{
		background:white;
		color:black;
	}

	.global-nav li a:active{
		transform: scale(0.9);
	}

	.global-nav__trigger{
		position:fixed;
		z-index:99999;
		width:8vw;
		right:0;
		bottom:0;
		transition:transform 0.5s ease-in-out;
	}

	.global-nav__trigger:active svg{
		transform:scale(0.9);
	}

	.global-nav__trigger.active{
		transform:rotate(180deg);
	}

	.global-nav__trigger.active polyline{
		stroke:white;
	}
	
	.global-nav__trigger svg{
		width:100%;
		display:block;
		fill:none;
	}

	.global-nav__trigger polyline{
		stroke:black;
		transition: stroke 0.5s ease-in-out;
	}

</style>


</head>
<a class="global-nav__trigger">
		<svg viewBox="0 0 100 100" stroke-width="10">
			<polyline points="10 50 50 10 90 50"/>	
			<polyline points="50 90 50 10"/>	
		</svg>
	</a>
<nav class="global-nav">
	
	<li>
		<a href="../2018-02-20/rotation.php">
			2018-02-20 Rotation
		</a>
	</li>
	<li>
		<a href="../2018-02-25/ellipsis.php">
			2018-02-25 Ellipsis
		</a>
	</li>
	<li>
		<a href="../2018-02-25/letters.php">
			2018-02-25 Letters
		</a>
	</li>
	<li>
		<a href="../2018-02-25/overlap.php">
			2018-02-25 Overlap
		</a>
	</li>
	<li>
		<a href="../2018-02-27/index.php">
			2018-02-25 Patterns
		</a>
	</li>
	<li>
		<a href="../2018-03-04/iframes.php">
			2018-03-04 iFrames
		</a>
	</li>
</nav>

<script>
	$(document).ready(function(){
		$('.global-nav__trigger').click(function(){
			$('.global-nav').toggleClass('active');
			$('.global-nav__trigger').toggleClass('active');
		});
	});
</script>

</html>