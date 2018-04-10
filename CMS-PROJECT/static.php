<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>	
<body>
	<nav class="global-nav">
		<a class="global-nav_trigger">index</a>
		<ul class="global-nav_list">
			
			<?php 
				$rotation = rand(-40,40); 
				echo "<li class='global-nav_item new' style='transform:rotate(".$rotation."deg);'>";
				echo "<a href='#'>New</a>";
				echo "</li>";

			?>
			
			<?php 
				$counter = 1;
				$number = 21;
				$seconds = date("s");
				

				while ($counter <= $number) {
					$rotation = rand(-40,40);
					echo "<li class='global-nav_item' style='transform:rotate(".$rotation."deg);'>";
					echo "<a href='#'>$counter</a> ";
					echo "</li>";
					$counter++;
				}
			 ?>
		</ul>
	</nav>

	<section class="composition">
		<header class="composition-header">
			<h1 class="composition-title">01</h1>
		</header>
		<div class="composition-wrapper">
			<img src="uploads/file-name-10.jpg" style="transform:scale(<?php echo (rand(50,250)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-01.png" style="transform:scale(<?php echo (rand(50,180)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-02.jpg" style="transform:scale(<?php echo (rand(50,180)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-03.png" style="transform:scale(<?php echo (rand(50,180)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-04.png" style="transform:scale(<?php echo (rand(50,180)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-05.png" style="transform:scale(<?php echo (rand(50,180)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-07.png" style="transform:scale(<?php echo (rand(50,180)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-01.png" style="transform:scale(<?php echo (rand(50,180)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-01.png" style="transform:scale(<?php echo (rand(50,250)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-01.png" style="transform:scale(<?php echo (rand(50,250)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-08.png" style="transform:scale(<?php echo (rand(50,250)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-09.png" style="transform:scale(<?php echo (rand(50,250)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-09.png" style="transform:scale(<?php echo (rand(50,250)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-09.png" style="transform:scale(<?php echo (rand(50,250)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			<img src="uploads/file-name-09.png" style="transform:scale(<?php echo (rand(50,250)*0.01)?>)rotate(<?php echo rand(-180,180); ?>deg);" alt="" class="placed-piece">
			
		</div>
		<nav class="composition-nav">
			<a href="#" class="composition-nav_previous"><img src="uploads/ui/arrrow-back.svg" alt="back arrow"><span>Back</span></a>
			<a href="#" class="composition-nav_next"><span>Next</span><img src="uploads/ui/arrow.svg" alt="next arrow"></a>
		</nav>
	</section>
	
	<section class="pieces-drawer">
		<header class="pieces-drawer_header">
			<h2 class="pieces-drawer_title">Pieces</h2>
			<div class="pieces-drawer_wrapper">
				<img src="uploads/file-name-01.png" alt="" class="piece-in-the-drawer">
				<img src="uploads/file-name-02.jpg" alt="" class="piece-in-the-drawer">
				<img src="uploads/file-name-03.png" alt="" class="piece-in-the-drawer">
				<img src="uploads/file-name-04.png" alt="" class="piece-in-the-drawer">
				<img src="uploads/file-name-05.png" alt="" class="piece-in-the-drawer">
				<img src="uploads/file-name-07.png" alt="" class="piece-in-the-drawer">
				<img src="uploads/file-name-08.png" alt="" class="piece-in-the-drawer">
				<img src="uploads/file-name-09.png" alt="" class="piece-in-the-drawer">
				<img src="uploads/file-name-10.png" alt="" class="piece-in-the-drawer">
				
			</div>	
		</header>
		
		<button>Save Composition</button>
	</section>
	<footer>
	</footer>

	<script>
		var navActive = false; 
		$(document).ready(function(){
			$('.global-nav_trigger').click(function(){
				$('.global-nav').toggleClass('active');
				navActive = !navActive;
				console.log(navActive);
				if (navActive) {
					$(this).html('<img src="uploads/ui/close.svg">');
					$('.global-nav').css('z-index','999');
				} else {
					$(this).html('Index');
					$('.global-nav').css('z-index','1');
				}
			});



			$('.piece-in-the-drawer').click(function(){
				$('.piece-in-the-drawer').each(function(){
					$(this).removeClass('selected');
				});
				$(this).addClass('selected');
			});
		});
	</script>
</body>
</html>