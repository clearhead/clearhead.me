jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 49) {
        jQuery("header").addClass("scrolled");
        jQuery("body").addClass("scrolled");
    } else {
        jQuery("header").removeClass("scrolled");
        jQuery("body").removeClass("scrolled");
    }
});

jQuery('a.smooth-scroll[href^="#"]').click(function(event) {
    var id = jQuery(this).attr("href");
    var offset = 49;
    var target = jQuery(id).offset().top - offset;
    jQuery('html, body').animate({scrollTop:target}, 700);
    event.preventDefault();
});


