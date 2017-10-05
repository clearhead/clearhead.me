jQuery(document).ready(function($){
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
