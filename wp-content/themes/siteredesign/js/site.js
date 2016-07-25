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

//Footer PDF link
jQuery(".pdf-wrap a, .contact-wrap a").click(function(e) {
	dataLayer.push({'event': 'download-pdf'});
});