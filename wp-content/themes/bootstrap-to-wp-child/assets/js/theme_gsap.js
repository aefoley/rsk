 

  //basic  ------------------------------------------------------------------------  
(function($) {
   
    //  h1 = $('#success');//change these to homepage specific
    //  div1 = $('#difference');
    //  div2 = $('#design');


    // //a bunch of tweens in sequence that happen right after page load.
    // TweenMax.set($('h1'), {className: '-=home-title'});
    // TweenMax.set($('div'), {className: '-=home-fade1'});
    // TweenMax.set($('div'), {className: '-=home-fade2'});


// The ScrollMagic controller
    
  var controller = new ScrollMagic.Controller();
  
  //marketing section fade-in 
    var scene = new ScrollMagic.Scene({ 
                  triggerElement: "#trigger-mkt",
                  triggerHook: .2
                })
                .setTween("#fadeIn1", 2, {y: -15, opacity: 0}) // trigger a TweenMax.to tween
    .addTo(controller);



  //Client section fade-in 
    var scene2 = new ScrollMagic.Scene({
                  triggerElement: "#trigger-cli",
                  triggerHook: .2
                })
                .setTween("#fadeIn2", 2, {y: -15, opacity: 0})
               
     .addTo(controller);

  //Client section arrow bounce right
     
    var boun = $('img#bounceRight1');

    var bountw =  TweenLite.to(boun, 2, {className: '+=bounce2'});

    var scene3 = new ScrollMagic.Scene({
                  triggerElement: "#trigger-bounceright",
                  triggerHook: .5
                })
                .setTween(bountw)
              
    .addTo(controller);

    //Circle section bouncing -------------------------------------------------
    // -------------------------------------------------------------------------

    var circleFadeIn = new ScrollMagic.Scene({
                  triggerElement: "#trigger-ballfade",
                  triggerHook: .5,
                  //duration:50
                })
                .setTween("#fadeIn3", 2, {y: -15, opacity:0})
             
     .addTo(controller);


    var $circle = $('#circle'),
        $circle2 = $('#circle2'),
        $circle3 = $('#circle3'),
        duration = 1
      ;

     var circleBounce1 = TweenMax.to($circle, .1, {className: '+=bounce3', ease:Power4.easeOut});
     var circleBounce2 = TweenMax.to($circle2, .1, {className: '+=bounce3', ease:Power4.easeOut, delay:.5});
     var circleBounce3 = TweenMax.to($circle3, .1, {className: '+=bounce3', ease:Power4.easeOut, delay:.75});

     var sceneCircle1 = new ScrollMagic.Scene({
                  triggerElement: "#trigger3",
                  triggerHook: .5, 
                  reverse: false
                })
                .setTween(circleBounce1)                
                .addTo(controller);

     var sceneCircle2 = new ScrollMagic.Scene({
                  triggerElement: "#trigger3",
                  triggerHook: .5, 
                  reverse: false
                })
                .setTween(circleBounce2)                
                .addTo(controller);

      var sceneCircle3 = new ScrollMagic.Scene({
                  triggerElement: "#trigger3",
                  triggerHook: .5, 
                  reverse: false
                })
                .setTween(circleBounce3)                
               .addTo(controller);


    // Fade out speaking volumes sections  -------------------------------------
    // -------------------------------------------------------------------------

     var workFadeIn = new ScrollMagic.Scene({
                  triggerElement: "#trigger-speakingvfade",
                  triggerHook: .5,
                  // duration:50
                })
                .setTween("#fadeIn4", 2, {y: -15, opacity:0})
                .addTo(controller);

      var workArrowBounce = new ScrollMagic.Scene({
                  triggerElement: "#trigger-workfade",
                  triggerHook: .5,
                  duration:50
                })
                .setTween('#bounceRight2', {className: '+=bounce2'})
                .addTo(controller);


})(jQuery);

 jQuery(document).ready(function() {
        jQuery('.my-slider').unslider({

          arrows: {
            //  Unslider default behaviour
            prev: '<a class="unslider-arrow prev"><span class="glyphicon glyphicon-chevron-left"></span></a>',
            next: '<a class="unslider-arrow next"><span class="glyphicon glyphicon-chevron-right"></span></a>'
            }

        }
        );


});



