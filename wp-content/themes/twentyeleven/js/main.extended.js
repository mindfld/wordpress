 jQuery.noConflict();
 (function( $ ) {
 	$(function() {

 		$('.qtrans_language_chooser .lang-ru a').text('РУС');
 		$('.qtrans_language_chooser .lang-ua a').text('УКР');
		$('.qtrans_language_chooser .lang-en a').text('ENG');


        $('.block-inner.yellow .proj-inner:nth-child(5)').css('margin-right','0');
        $(document).ready(function() {   
            $('a[name=modal]').click(function(e) {
            e.preventDefault();
            var id = $(this).attr('href');
            var maskHeight = $(document).height();
            var maskWidth = $(window).width();
            $('#mask').css({'width':maskWidth,'height':maskHeight});
            $('#mask').fadeIn(0); 
            $('#mask').fadeTo(0); 
            var winH = $('#page').height();
            var winW = $('#page').width();
            $(id).css('top',  100+'px');
            $(id).css('left', '50%');
            $(id).fadeIn(0); 
            });
            $('.window .close').click(function (e) { 
            e.preventDefault();
            $('#mask, .window').hide();
            }); 
            $('#mask').click(function () {
            $(this).hide();
            $('.window').hide();
            }); 
        });  
        setInterval(function(){
            $(".fancybox").fancybox();
    	},100);
        $('#access .sub-menu li:last-child a').css('border-radius','0 0 10px 10px');
        $('#access .sub-menu li:first-child a').css('border-radius','10px 10px 0 0');
        $('.category-menu li:last-child').css('padding-right','0');
  	});
})(jQuery);