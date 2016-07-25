jQuery(document).ready(function($) {

  $("#connectForm").validate();

  //Handle the ajax submission
	$("#connectForm").submit(function(e) {
    $(".error_message").hide();
    if($(this).valid()) {
      dataLayer.push({'event': 'send-email'});
      var array = $('#connectForm').serializeArray();
      var _data = {};
      for(var i=0; i < array.length; i++){
        var current = array[i];
        _data[current.name] = current.value;
      }
    	_data['action'] = 'send_mail_via_wordpress'; 

    	$.ajax({
        type: "post",
      	url: my_ajax_object.ajax_url,
      	data: _data,
        success: function(parsedResponse) {
            console.log(parsedResponse);
            $("#connectForm").hide();
            $(".contact-wrap .heading-4").append('<div class="success_message">Message Sent! We will contact you soon</div>');
   	    },
        error: function(jqXHR,textStatus, errorThrown ) {
          $(".contact-wrap .heading-4").append('<div class="error_message">We\'ve had an issue submitting the form. Please try again</div>');
        }
    });
    }
    else
    {
      console.log("invalid");
    }
    	
    e.preventDefault();
    });
})