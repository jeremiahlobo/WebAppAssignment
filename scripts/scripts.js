jQuery(function($){

	$(window).scroll(function(){
    
		if( $(this).scrollTop() >= 680 ) {
      $('.navbar').removeClass('bg-transparent');
      $('.navbar').addClass('bg-dark');
		}else {
      $('.navbar').removeClass('bg-dark');
      $('.navbar').addClass('bg-transparent');
    }

	});

});
