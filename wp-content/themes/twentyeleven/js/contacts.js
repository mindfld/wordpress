 jQuery.noConflict();
 (function( $ ) {
 	$(function() {
 		$(document).ready(function() {  
	 		$('.offices-block .office-block').css('left','-99999px');
	        $('.offices-block .office-block:first-child').css('left','0px');
	 		$(".office-list select").chosen({disable_search_threshold: 10});
	        $('.office-list select').change(function(){
	        var selectOffice = $(".office-list option:selected").val();
	        var selectOfficeFinal = '.'+selectOffice;

	            $('.office-block').css('left','-99999px');
	            $(selectOfficeFinal).css('left','0px');
	            
	        });
        });
  	});
})(jQuery);