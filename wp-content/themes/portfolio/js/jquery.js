var header = jQuery('header');

console.log("こんにちは");
jQuery(window).on('load',function(){
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() >= 100) {
            header.removeClass('header-transparent');
        } else {
            header.addClass('header-transparent');
        }
    });
});