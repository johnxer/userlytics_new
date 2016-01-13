$(document).ready(function(){
	$(".main_select li a").on("click", function(){
			var linkOs = $(this).attr("data-link")
			if ($(this).parents(".main_select li").hasClass("active")){

			}else{
				$(".main_select li").removeClass("active").addClass("inactive");
				$(".step_list").hide();
				$("."+ linkOs +"").fadeIn();
				$(this).parents(".main_select li").addClass("active").removeClass("inactive");

			}


	})

$(function () {
  $('[data-toggle="popover"]').popover()
})

});