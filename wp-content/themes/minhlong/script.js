jQuery(document).ready(function($) {
	  $("#owl-home").owlCarousel({
        autoPlay: 5000,
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
        items : 1
  	});

  	$("#owl-company").owlCarousel({
        autoPlay: false,
        items :3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,1]
  	});
  	
     $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $('.nav-mobile').click(function() {
         $('#menu-minhlong').toggle("slide");
    });
});