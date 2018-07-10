$(function() {
 

   $('#prod-selector').attr("href","#")
   $('#prod-selector, #prod-cta').click(function() {
   $('#prod-selector').parent().toggleClass('chameleon no-anim');
   $(".product-selector-dropdown" ).slideToggle('easeInOutQuint')
   $("#block-block-11").slideToggle('easeInOutQuint')
     $('#prod-selector').parent().removeClass('no-anim')
   
    })
    
  });
  

 $(function() {     
   $(document).on('click','#xs-toggle', function() {
       $('.views-field-field-productimg').hide()
       $('.views-field-field-cross-section').show() 
       $('#xs-toggle').addClass('active');
       $('#pic-toggle').removeClass('active');
    })
    
    
   $(document).on('click','#pic-toggle', function() {
       $('.views-field-field-productimg').show()
       $('.views-field-field-cross-section').hide()
       $('#xs-toggle').removeClass('active');
       $('#pic-toggle').addClass('active');
    })
});
      
$(function() {
       
  
$( document ).ajaxComplete(function() {
 $( ".browsing-product" ).fadeTo(0, 0);

$('.browsing-product').each(function(fadeInDiv){
     $(this).delay(fadeInDiv * 50).fadeTo(100, 1);
        });
   });
  });