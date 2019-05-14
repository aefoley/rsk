<?php
/*
    Template Name: Custom Contact
*/
?>

<?php get_header();?>
   <?php //include('includes/pop-in.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
<div class="m-scene" id="main">
  <div class="m-page scene_element scene_element--fadeinup">
        <div class="container-fluid">
            <div class="row content ">
                <div class="col-sm-12 pleft0 pright0">
                        <div class="google-maps" >
                           <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.2944163357056!2d-89.53334198452085!3d43.077305279145314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8807af400671bfc7%3A0x97afa469c6a1c0f!2s701+Deming+Way%2C+Madison%2C+WI+53717!5e0!3m2!1sen!2sus!4v1486679256382" width="1450" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23315.056534553936!2d-89.38175417921589!3d43.07546229988459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8806531513ca87f3%3A0xf84d673d6bc93051!2s155+E+Wilson+St%2C+Madison%2C+WI+53703!5e0!3m2!1sen!2sus!4v1541539812059" width="1450" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                <?php endwhile; else: ?>

                  <p>It looks like nothing was found at this location. Maybe try a search?></p>
                <?php get_search_form(); ?>

                <?php endif; ?>

                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row" style="background-color:#ED1C24;">
                <div class="col-sm-4 square-it one">
                   
                    <div class="inner-square-it">
                       <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/white-circle-600.png" alt="" class="img-responsive">
                       <div class="content-circle"> 
                           <h2 style="color:#ed1c24">Stopping by?</h2>
                            <p><small>We're at:</small></p>
                            <p>155 E Wilson Street, Suite 100<br>
                            Madison, WI 53703<br></p>
                            <p><a href="mailto:info@rsandk.com">info@rsandk.com</a><br>
                            <span style="color: #ed1c24;"><strong>Tel:</strong></span> <strong><a href="tel:608-827-0701">608-827-0701</a></strong></p>
                        </div>
                    </div>
                 
                </div>
                <div class="col-sm-4 elk square-it two">
                    <div class="inner-square-it"> 
                       
                    </div>
                    
                </div>
                <div class="col-sm-4 square-it three">
                     <div class="inner-square-it">
                       <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/white-circle-600.png" alt="" class="img-responsive">
                       <div class="content-circle"> 
                           <h2 style="color:#ed1c24;" class="hidden-sm">Reaching out?</h2>
                            <p>We love listening to people's business challenges and brainstorming how we can help move the needle.</p><br class="hidden-md hidden-sm">
                            <p>Contact <strong>Kay Krebsbach</strong> for a chat.</p>
                            <p><a href="mailto:info@rsandk.com">info@rsandk.com</a><br>
                            <span style="color: #ed1c24;"><strong>Tel:</strong></span> <strong><a href="tel:608-827-0701">608-827-0701</a></strong></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row" style="background-color:#939393;"> 
                <div class="col-sm-4 square-it four">
                    <div class="inner-square-it">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/white-circle-600.png" alt="" class="img-responsive">
                        <div class="content-circle">  
                            <h2 style="color:#ed1c24">We're social:</h2>
                            <div class="row shrinkthese">
                                <div class="col-xs-3"><a href="https://www.facebook.com/rsandk/"><img src="/wp-content/themes/bootstrap-to-wp-child/assets/img/fbgray.svg" alt="facebook logo"></a></div>
                                <div class="col-xs-3"> <a href="https://www.linkedin.com/company/r-s-k"><img src="/wp-content/themes/bootstrap-to-wp-child/assets/img/ligray.svg" alt="linkedin logo"></a></div>
                                <div class="col-xs-3"> <a href="https://www.youtube.com/channel/UCOrRlXSU7WwQrMGJssueHHA"><img src="/wp-content/themes/bootstrap-to-wp-child/assets/img/ytgray.svg" alt="youtube logo"></a></div>
                                <div class="col-xs-3"><a href="https://twitter.com/RSandK_Inc" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/twgray.svg" alt="twitter icon"/></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 square-it five">
                    <div class="inner-square-it"> 
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/white-circle-600.png" alt="" class="img-responsive">
                        <div class="content-circle" >
                        <h2>&nbsp;</h2>
                           <!--  <p>You can't miss the elk sculptures in the front yard, made by an accomplished sculptor friend from Montana.</p><br>
                            <p>They add an eclectic touch to our ASID architectural award-winning, utterly contemporary space. </p> -->
                            <p>We’re ecstatic to now be in <br>downtown Madison! <br><br>The creative energy is enormous, and so is our ability to create great work and help our clients grow.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 square-it six">
                    <div class="inner-square-it"> 
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/white-circle-600.png" alt="" class="img-responsive">
                        <div class="content-circle"> 
                            <h2 style="color:#ed1c24">Careers</h2>
                            <p>RS+K currently does not have any positions or internships available. But we're always looking for great talent. If you feel you're stellar in your field, send us your resume.</p>
                        </div>
                    </div>
                </div>
                
            </div>

        </div><!-- end container -->
    </div>
</div>

<?php get_footer();?>
