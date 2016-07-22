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

// show/hide browse menu
jQuery('.menu-toggle-mobile').click(function(e) {
    e.preventDefault();
    jQuery('body').toggleClass('show-menu-mobile');
});

jQuery('.menu-mobile a').click(function(e) {
    jQuery('body').removeClass('show-menu-mobile');
});


//Validation for contact form before submission
jQuery(".contact-form").validate();

//Update the submit button to remove the arrow
jQuery(".pushbutton-wide").val("Submit");
jQuery(".contact-form textarea").attr("rows", 4);


//All the contact forms from Jetpack have the .contact-form class
(function($) {
    $(".contact-form").on('submit', function (e) {
        //disable the button on form submit
        jQuery(".pushbutton-wide").prop('disabled', true);
        if($(this).valid())
        {
          //Wrapper for our form fields to submit via ajax
          var formData = {};

          //The id of the contact form
          var contact_form_id = $(this).find('input[name=contact-form-id]').val();

          //fields contained (vary per form)
          var formFields = $(this).find("input[name^='g" + contact_form_id + "'], textarea[name^='g" + contact_form_id + "']");

          var contactFormText = [];
          var contactFormFields = [];

          //Get our form fields here.
          for(var i = 0; i < formFields.length; i++) {
            //Get the name of the element
            var fieldNameArr = $(formFields[i]).attr('name').split('-');
            if(fieldNameArr.length >=  2)
            {
                //The name of the field (name)
                var fieldName = fieldNameArr[1];
                contactFormText.push(fieldName);
            }
            formData[$(formFields[i]).attr('name')]  = $(formFields[i]).val();

          }

          //Get the text associated with the form fields
          var formFields = $(this).find(".grunion-field-label");
          for(var j=0; j < formFields.length; j++)
          {
            contactFormFields.push($(formFields[j]).text().replace(/ *\([^)]*\) */g, ""));
          }

          //Our ajax url for later
          var form_url = $(this).attr("action");

          // get/set other form data
          //If the user is logged in, we need these values as well for the form to submit correctly.
          //WorkSpace is an object that stores values from PHP. In this case, WorkSpace. User is boolean (true/false) and is set using is_user_logged_in() WP Function

          formData['_wpnonce']         = $(this).find('input[name=_wpnonce]').val();
          formData['_wp_http_referer'] = $(this).find('input[name=_wp_http_referer]').val();
          //These fields are required in all cases
          formData['contact-form-id']  = contact_form_id;
          formData['action']           = 'grunion-contact-form';

          //Loading animation. Uses Font Awesome but could be replaced with whatever.
          $(this).find('input[type=submit]').after('<span class="spinner"></span>');

          // process the form
          $.ajax({
            type  : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url : form_url, // the url where we want to POST
            data: formData, // our data object
            encode: true
          })

          .done(function (data) {
          //data is the entire HTML page returned. Append it a fake div element to let jQuery run and act as normal
          var html    = $('<div />').append(data);
          var form = '#contact-form-' + contact_form_id;

          //Hide the spinner animation
          $(form).find('.spinner').hide();
          //Get the message on the page, in HTML
          var message = html.find(form + ' h3').text();

          //Regex to match the 'Error' string in the returned page
          if (/Error/.test(message)) {
            //error with form submission.
            $(form).prepend(html.find(form + ' .form-error'));
            return false;
          }

          //Otherwise we're all good.
          $(form).append("<h3>Message Sent</h3>");
          $(form).append("<blockquote class=\"contact-form-submission\">");
          //Loop throug the elements to generate a blockquote
          for(var i=0; i < contactFormFields.length; i++)
          {
              $(".contact-form-submission").append("<p>"+ contactFormFields[i] + ": " + formData['g' + contact_form_id + "-"+contactFormText[i]] + "<br><br></p>");
          }
          $(".contact-form").hide();
          $(".mt0").hide();

          });
          // stop the form from submitting
          e.preventDefault();
        }
        jQuery(".pushbutton-wide").prop('disabled', false);
    });
})(jQuery);


