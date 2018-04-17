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