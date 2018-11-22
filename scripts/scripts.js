jQuery(function($){
		names = ['boat lake', 'bahamas', 'house on the beach'];
		picslinks =['https://www.tripadvisor.com/VacationRentals-g4465255-Reviews-Deep_Creek_Lake_Maryland-Vacation_Rentals.html','https://www.itravel2000.com/vacation-deals/bahamas','https://www.beachhouse.com/usa-florida-vacation-rentals-bm17.html'];
		travelImages = new Array();
			travelImages[0] = new Image();
			travelImages[0].src = "images/boat-lake.jpg";
			travelImages[1] = new Image();
			travelImages[1].src = "images/bahamas.jpg";
			travelImages[2] = new Image();
			travelImages[2].src = "images/houses.jpg";
// Navigation
	$(window).scroll(function(){

		if( $(this).scrollTop() >= 680 ) {
      $('.navbar').removeClass('bg-transparent');
      $('.navbar').addClass('bg-dark');
		}else {
      $('.navbar').removeClass('bg-dark');
      $('.navbar').addClass('bg-transparent');
    }

	});

	//from handling
	$("#contact-form-submit").click(function(event){
		return confirm("sending form, are you sure?");
		this.reset();
	});
	$("#contact-form-reset").click(function(event){
		return confirm("This form's field will be resetted. Is that OK?");
	});

	//Display all list items
	//connecting all listed description to their images
	$('.display-image').hide();
	for (var i = 0; i < names.length; i++) {
		$('.list-description').append( '<li data-linkid='+i+'>' + names[i] + '</li>');
		// $('.list-description').append( '<li>' + names[i] + '</li>');
	}
	$('.list-description > li').hover(function(){
		id = $(this).data('linkid');
		$('.display-image').html('<a href="'+picslinks[id]+' target="_blank""><img src=' + travelImages[id].src + ' /></a>').css("display", "block");
	});





});
