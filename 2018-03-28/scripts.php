<script>
	
	var drawerOpen = false;
	var rotated = 0;

	$(document).ready(function(){
		


		

		$('.placed').click(function(){
			$('.placed').removeClass('selected')
			$(this).addClass('selected');
			$('.selected').draggable();
			var rotation = $(this).css('rotate');
			console.log('selected! now the rotation is ' + rotation);

		});

		$('body').keyup(function(){
			$('.placed').removeClass('selected');
		});

		
		$('.drawer_item').click(function(){
			$('.drawer_item').removeClass('selected');
			$(this).addClass('selected');
		});

		$('.drawer_title').click(function(){
			$('.drawer_item').removeClass('selected');
		});

		
		

	});
</script>