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


    $(function () {
        var header = $('.site-header');
        $(window).on('scroll resize', function () {
            var scroll = $(window).scrollTop();

            if (window.matchMedia('(max-width: 699px)').matches) {
                if (scroll >= 5) {
                    header.addClass('is-filled');
                } else {
                    header.removeClass('is-filled');
                }
            } else if (window.matchMedia('(max-width: 1279px)').matches) {
                if (scroll >= 3) {
                    header.addClass('is-filled');
                } else {
                    header.removeClass('is-filled');
                }
            } else {
                if (scroll >= 14) {
                    header.addClass('is-filled');
                } else {
                    header.removeClass('is-filled');
                }
            }

        });
    });


    // Points in document to add waypoints
    waypointObject('#what-we-do');
    waypointObject('#partners');
    waypointObject('#who-we-are');
    waypointObject('#contact');

    // Sets the waypoint objects. Looks for menu items based on url
    function waypointObject(url) {
        return new Waypoint.Inview({
            element: $(url + '-view'),
            enter: function (direction) {
                if (direction === "down") {
                    $(".site-header nav li").removeClass("is-active");
                    $('.site-header nav li:has(a[href="/' + url + '"])').addClass("is-active");
                }
            },
            exit: function (direction) {
                if (direction === "up") {
                    $(".site-header nav li").removeClass("is-active");
                    $('.site-header nav li:has(a[href="/' + url + '"])').prev('li').addClass("is-active");
                }
            }
        });

    }
});