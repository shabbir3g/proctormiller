(function ($) {
	"use strict";

	$(document).ready(function(){
		
		$('a.ubermenu-responsive-toggle').click(function(){
			
			$('.main-menu ul').slideToggle();
			
		});
		
			$(window).scroll(function(){
			
			
				if($(window).scrollTop() > 100){
				
					//$('section.homebanner').css('position','inherit');
					$('.home .masthead-vertical-bg').css('opacity', 1 );
					
					$('section.homebanner').fadeOut();
				
				}else{
				
				//$('section.homebanner').css('position',' ');
				$('home  .masthead-vertical-bg').css('opacity',0);
				$('section.homebanner').fadeIn();
				} 
			
			
			});
		 
			
	});

}(jQuery));