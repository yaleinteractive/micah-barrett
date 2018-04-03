<script>
	
	var drawerOpen = false;
	var rotated = 0;

	$(document).ready(function(){
		


		var drawerHeight = document.getElementById('drawer_list').getBoundingClientRect().height;

		console.log(drawerHeight);

		$('.drawer').css('bottom', -drawerHeight);

		$('.drawer_title').click(function(){
			if (drawerOpen == false) {
				$('.drawer').css('bottom',0);
			}

			if (drawerOpen == true) {
				$('.drawer').css('bottom', -drawerHeight);

			}
			
			drawerOpen = !drawerOpen;

		});

		$(window).resize(function(){
			var drawerHeight = document.getElementById('drawer_list').getBoundingClientRect().height;
			if (drawerOpen == false) {
				$('.drawer').css('bottom',-drawerHeight);
			}
		});

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

		$( ".rotate" ).on( "click", function() {
  $( '.selected' ).css({
    rotate: function( index, value ) {
      return parseFloat( value ) * 1.2;
    }
  });
});


		
		

	});
</script>