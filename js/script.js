// JavaScript Document
 $(document).ready(function() {
    $('#autoWidth').lightSlider({
        auto:true,
        autoWidth:true,
        loop:true,
        
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });