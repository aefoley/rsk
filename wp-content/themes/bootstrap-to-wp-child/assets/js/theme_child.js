

jQuery(document).ready(function () {

jQuery('#pop-in-test').toggle(function() {
    jQuery("a").click(function(e) {
      e.stopPropagation();
    });
    //stop prevents animation queues
    jQuery(this).stop(true, true).animate({ left: '0' }, 300);
  }, 
  function() {
    jQuery(this).stop(true, true).animate({ left: '-300' }, 300);
  });
});

/*
*
*  On contact page makes squares same height as width. But not ajaxy.
*
*/

jQuery(document).ready(function () {
  
  jQuery('.square-it').each(function() {
        jQuery(this).height(jQuery(this).width());
    });

});


/*
*
*  Shrinks and grows header on scroll to 300
*
*/

jQuery(function(){
    var shrinkHeader = 300;
    jQuery(window).scroll(function() {
        var scroll = getCurrentScroll();
        if ( scroll >= shrinkHeader ) {
        jQuery('.navbar-default').addClass('shrink');
        jQuery('.navbar-header').addClass('shrink');
        jQuery('.navbar-brand').addClass('shrink');
        jQuery('.navbar-collapse').addClass('shrink2');


    } else {
    jQuery('.navbar-default').removeClass('shrink');
    jQuery('.navbar-header').removeClass('shrink');
    jQuery('.navbar-brand').removeClass('shrink');
    jQuery('.navbar-collapse').removeClass('shrink2');
        }
        });
        function getCurrentScroll() {
        return window.pageYOffset;
    }
});



jQuery('a[href^="#"]').on('click', function(event) {
    var target = jQuery(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});



  (function($) {

  // ===== Scroll to Top ==== 
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
          $('#return-to-top').fadeIn(500);    // Fade in the arrow
      } else {
          $('#return-to-top').fadeOut(500);   // Else fade out the arrow
      }
  });
  $('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
          scrollTop : 0                       // Scroll to top of body
      }, 500);
  });

})( jQuery );

/*
*
*  Click add active - will probably come out
*
*/

jQuery(document).ready(function () { //run when the DOM is ready
    jQuery('.clickable').click(function() {  
        jQuery("li.clickable.active").removeClass("active");
        jQuery(this).addClass('active');     
        
        var holder = jQuery(this).children('a').attr('href');
        var holder2 = holder.substring(1);
        
        jQuery("div.border").removeClass("border");
        jQuery('#' + holder2).addClass('border');
    });

});



/*
*
*  Add tooltips
*
*/

jQuery(document).ready(function () {
  
  jQuery('.tooltip-right').tooltip({
    placement: 'top',
    padding: 10,
   })
  
})






