jQuery(document).ready(function() {
     
    jQuery("#owl-demo").owlCarousel({
     
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    autoPlay: true
     
    // "singleItem:true" is a shortcut for:
    // items : 1,
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false
     
    });
     

    jQuery('.navbar-toggle').click(function (event) {
        event.preventDefault();
        if(jQuery( window ).width()<=733){
            if(!jQuery('nav').is(':visible')) {
                jQuery('nav').slideDown('fast');
            } else {
                jQuery('nav').slideUp('fast');
            }}
        else{
            if(!jQuery('nav').is(':visible')) 
            {
 jQuery('nav').slideDown('fast');
            }
            jQuery('nav').css('display','inline-block !important');

        }
        jQuery( window ).resize(function() 
        {
          if(jQuery( window ).width()>733){
                  if(!jQuery('nav').is(':visible')) 
            {
 jQuery('nav').slideDown('fast');
 jQuery('nav').css('display','inline-block !important');

            }
        }

});

    });
        });