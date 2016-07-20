$(document).ready(function(){
  $(".section-toggle").click(function(e){
    $($(this)).prev().slideToggle('slow');
    $($(this)).toggleClass("active")

  })
})
