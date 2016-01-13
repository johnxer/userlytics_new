$(document).ready(function(){
	$(".main_select li a").on("click", function(){
			var linkOs = $(this).attr("data-link")
			
			if ($(this).parents(".main_select li").hasClass("active")){

			}else{
				$(".main_select li").removeClass("active").addClass("inactive");
				$(".step_list_ios").slideUp(100);
				$(".step_list_android").slideUp(100);
				$("."+ linkOs +"").slideDown();
				$(this).parents(".main_select li").addClass("active").removeClass("inactive");

			}


	})

	$(".launch-info").css('min-height', $(window).height()-130);
				});
				$(window).load(function() {
				$(".launch-info h2").css("opacity","1").css("left", "0");
				setTimeout(function() {
				$(".help-info h2").css("opacity","1").css("left", "0");
			}, 500);

	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        

	setTimeout(function(){
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000)}, 300
	    );
	        return false;
	      }
	    }
	  });
	});



	$(function () {
	  $('[data-toggle="popover"]').popover()
	})

});