
try {console.log('temp')} catch(e) {}

var inview1 = new Waypoint.Inview({
  element: jQuery('#what')[0],
  enter: function(direction) {
  	if (direction == "down") {
  		jQuery(".menu-item").removeClass("active");
  		jQuery("#menu-item-6").addClass("active");
  	}
  },
  exit: function(direction) {
  	if (direction == "up") {
    	jQuery(".menu-item").removeClass("active");
  		jQuery("#menu-item-6").addClass("active");
  	}
  }
});

var inview2 = new Waypoint.Inview({
  element: jQuery('#why')[0],
  enter: function(direction) {
  	if (direction == "down") {
  		jQuery(".menu-item").removeClass("active");
  		jQuery("#menu-item-7").addClass("active");
  	}
  },
  exit: function(direction) {
  	if (direction == "up") {
    	jQuery(".menu-item").removeClass("active");
  		jQuery("#menu-item-7").addClass("active");
  	}
  }
});

var inview3 = new Waypoint.Inview({
  element: jQuery('#who')[0],
  enter: function(direction) {
  	if (direction == "down") {
  		jQuery(".menu-item").removeClass("active");
  		jQuery("#menu-item-8").addClass("active");
  	}
  },
  exit: function(direction) {
  	if (direction == "up") {
    	jQuery(".menu-item").removeClass("active");
  		jQuery("#menu-item-8").addClass("active");
  	}
  }
});

var inview2 = new Waypoint.Inview({
  element: jQuery('#contact')[0],
  enter: function(direction) {
  	if (direction == "down") {
  		jQuery(".menu-item").removeClass("active");
  		jQuery("#menu-item-9").addClass("active");
  	}
  },
  exit: function(direction) {
  	if (direction == "up") {
    	jQuery(".menu-item").removeClass("active");
  		jQuery("#menu-item-9").addClass("active");
  	}
  }
});
