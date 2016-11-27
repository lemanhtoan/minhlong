jQuery(document).ready(function($) {
	$("#owl-home").owlCarousel({
        autoPlay: 3000,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1],
        navigation:true,
        navigationText: [
            "<span class='icon-arrow-left'></span>",
            "<span class='icon-arrow-right'></span>"
        ]
  	});

	$("#owl-customer").owlCarousel({
        autoPlay: false,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1]
  	});

  	$("#owl-company").owlCarousel({
        autoPlay: false,
        items :3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,1]
  	});
  	
});