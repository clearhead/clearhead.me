jQuery(document).ready(function($){

    $('.menu-toggle').click(function () {
        $('.site-header nav').toggleClass('is-showing');
    });
    $('a.smooth-scroll').click(function () {
        $('nav').removeClass('is-showing');
    });

    // $('a.smooth-scroll').click(function(event) {
    //     var id = $(this).attr("href");
    //     var offset = 49;
    //     var target = $(id).offset().top - offset;
    //     $('html, body').animate({scrollTop:target}, 700);
    //     event.preventDefault();
    // });

    $('a.smooth-scroll').click(function () {
        var href = $(this).attr('href');
        var trimmed = href.substring(1);
        if (trimmed === "main") {
            $('html, body').animate({
                scrollTop: 0
            }, 700);
        }
        else {
            $('html, body').animate({
                scrollTop: $(trimmed).offset().top
            }, 700);
        }
        $(".main-navigation").removeClass("toggled");
        return false;
    });
});


