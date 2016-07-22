//Points in document to add waypoints
waypointObject('#what');
waypointObject('#with');
waypointObject('#who');
waypointObject('#contact');

//Sets the waypint objects. Looks for menu items based on url
function waypointObject(url) {
  return new Waypoint.Inview({
    element: jQuery(url),
    enter: function(direction) {
      if (direction === "down") {
        jQuery(".menu-item").removeClass("active");
        jQuery('.menu li:has(a[href="/' + url + '"])').addClass("active");
      }
    },
    exit: function(direction) {
      if (direction === "up") {
        jQuery(".menu-item").removeClass("active");
        jQuery('.menu li:has(a[href="/' + url + '"])').addClass("active");
      }
    }
  });

}

//parallaxBackground effects
jQuery('.window').parallaxBackground({
  'image': '.photo'
});


jQuery('.menu-item a, a.smooth-scroll, a[href$="main"]').click(function() {
  var href = jQuery(this).attr('href');
  var trimmed = href.substring(1);
  if (jQuery(window).width() <= 639) {
      if(trimmed === "main") {
          jQuery('html, body').animate({
              scrollTop: 0
          }, 700);
      }
      else {
          jQuery('html, body').animate({
                  scrollTop: jQuery( trimmed ).offset().top - 98
          }, 700);
      }
      jQuery(".main-navigation").removeClass("toggled");
      return false;
  }
  else {
      if(trimmed === "main") {
          jQuery('html, body').animate({
              scrollTop: 0
          }, 700);
      }
      else {
          jQuery('html, body').animate({
                  scrollTop: jQuery( trimmed ).offset().top - 49
          }, 700);
      }
      jQuery(".main-navigation").removeClass("toggled");
      return false;
  }
});
