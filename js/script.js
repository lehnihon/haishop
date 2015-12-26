( function( $ ) {
	$(function() {
		$('ul.yith-wcan-list').each(function( index ) {
			var flag = true;

			$(this).children('li').each(function( index ) {
				if($(this).hasClass('chosen'))
					flag = false;
			});		
			if(flag)
				$(this).parent().hide();

		});


		$('.img-plus').on('click',function(){
			$(this).parent().siblings('.yith-woo-ajax-navigation').toggle('slow');
		});

	});

	$(window).scroll(function() {
        
	});

} )( jQuery );