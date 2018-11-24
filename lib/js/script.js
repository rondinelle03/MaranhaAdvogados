$(document).ready(function(){
/*
	Códigos de invocação dos plugins.
*/


	$(".button-collapse").sideNav();

	$(".dropdown-button").dropdown();

	$("#foto-destaque").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
 
  });


	 $("nav li a").on("click",function(){       
	 	$('.azul-royal').addClass('fixar');
        var id = $(this).attr("href");
        $('html,body').animate({scrollTop:$(id).offset().top-90},1000);
        var li = $(this).parent("li");        
        setTimeout(function(){
        	$("nav li").removeClass("ativo");
        	li.addClass("ativo");
        }, 1100);  		
    });

});

var $meuMenu = $('.azul-royal');
		$(document).on('scroll', function () {
		
			if ($(window).scrollTop()>123) {
				$meuMenu.addClass('fixar');
			} else {
				$meuMenu.removeClass('fixar');
			}
		});



















