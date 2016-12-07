jQuery(".section-toggle").click(function(e){
	jQuery(this).prev().slideToggle('slow');
	jQuery(this).toggleClass("active")
});

function fbs_click(width, height) {
    var leftPosition, topPosition;
    //Allow for borders.
    leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
    //Allow for title and status bars.
    topPosition = (window.screen.height / 2) - ((height / 2) + 50);
    var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
    u=location.href;
    t=document.title;
    window.open('http://www.facebook.com/sharer.php?u=http://hubs.ly/H03Hdsn0'+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
    return false;
}

//Download PDF links
jQuery(".pdf-wrap a, .contact-wrap a").click(function(e) {
	dataLayer.push({'event': 'download-pdf'});
});

if(bowser.msie) {
  jQuery("body").addClass("ie");
}

window.twttr = (function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0],
     t = window.twttr || {};
   if (d.getElementById(id)) return t;
   js = d.createElement(s);
   js.id = id;
   js.src = "https://platform.twitter.com/widgets.js";
   fjs.parentNode.insertBefore(js, fjs);

   t._e = [];
   t.ready = function(f) {
     t._e.push(f);
   };

   return t;
  }(document, "script", "twitter-wjs"));

function windowPopup(url, width, height) {
  // Calculate the position of the popup so
  // it’s centered on the screen.
  var left = (screen.width / 2) - (width / 2),
  top = (screen.height / 2) - (height / 2);
  window.open(
  url,
  "",
  "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
  );
  }
  jQuery(".js-social-share").on("click", function(e) {
  e.preventDefault();
  windowPopup(jQuery(this).attr("href"), 500, 300);
});

