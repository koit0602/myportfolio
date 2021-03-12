//最初と最後は、「jQuery(function($){ ～～ }); 」で、囲ってください。

jQuery(function($){

var header = jQuery('header');	

	jQuery(window).on('load',function(){
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() >= 100) {
            header.removeClass('header-transparent');
        } else {
            header.addClass('header-transparent');
        }
    });
});
	
});