<?php
/*
    Template Name: Front Page
*/
?>
<?php get_header();?>
   <?php //include('includes/pop-in.php'); ?>

    <!-- Top red box - slides down a little. No fade.
    ================================================== -->
    <div class="m-scene" id="main">  
      <div class="m-page scene_element scene_element--fadeinup">
            <div class="container-fluid jumbotext" id="first-redbox">
                <div class="row">
                    <div class="col-sm-12">
                        
                        <h1 class="section-title" id="success">Your success is ours.</h1>
                        <div id="difference">
                            <p>We are in the business to make a difference, <br>
                            to move people with emotion <br>and communicate to get real results &hellip; <strong>yours.</strong></p>
                        </div>
                        <p>&nbsp;</p>

                        <div id="design">
                            <p class="small">brand + design + print + digital + media</p>
                            <p class="small">Madison, WI </p>
                            <a href="#marketing"><div class="arrow bounce"> </div></a>
                            <br>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- Marketing messaging
    ================================================== -->

    <div class="container" id="marketing">
        <div class="row" >
           
            <div id="fadeIn1"> <!-- fades out on scroll up -->
                <div class="col-sm-8 col-sm-offset-2">                
                    <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
                    <?php endwhile; endif; ?> 
                    <p> <span style="color:#ED1C24; font-weight:500">RS+K is a marketing communications firm in Madison, Wisconsin.</span> We specialize in developing high-image marketing programs for clients in the life sciences, high-tech, medical,<span id="trigger-mkt"></span>industrial, financial services and retail marketplaces.</p>
                     <div id="trigger-bounceright"></div>
                </div>
            </div>
        </div> <!-- end row -->
    </div><!-- /.container -->

    <!-- Work display
    ================================================== -->
   
        <div class="container-fluid" id="clients">
                   <div class="row" id="client-images">
                       <div class="col-sm-8 col-sm-offset-2">
                            <div id="fadeIn2" ><!-- fades out on scroll up -->
                                <h2 style="text-align:center">Clients we proudly serve</h2>
                                  
                                <p>It's not just what you build, but why you do it and who you do it for.</p> 
                                <p>In our world, it's all about you.</p>  <div id="trigger-cli"></div>
                                <a href="<?php bloginfo('url');?>/clients" class="" style="font-size:20px; color:#fff; text-align:center; display:block; margin:50px auto; text-decoration:none;"> go to Clients
                                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/round-right.svg" alt="" width="35" style="margin-top:-3px; margin-left:40px;"  id="bounceRight1"></a>
                            </div>
                        </div>
                    </div>
               <!--  </div> -->
         </div> <!--   container projects-->



    <!-- second red box
    ================================================== -->

    <div class="container-fluid" id="second-redbox">
        <div id="fadeIn3">
            <div class="row">
               <div class="col-sm-8 col-sm-offset-2">
                  <h2>3 top things we absolutely live by:</h2> 
                  <br>
               </div>
            </div>
            <div id="trigger3"></div>
            <div class="row">
                <div class="col-sm-4 square-it seven">
                    <div class="inner-square-it" id="circle">
                       <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/white-circle-600.png" alt="" class="img-responsive">
                       <div class="content-circle"> 
                            <h2>curiosity.</h2>
                           <p>It’s why we love high technology, it’s why we love learning and growing. </p>
                            <p>The world is so big and ever changing you must possess an extreme "want-to-know" to thrive in this business. We listen, we learn, <br>we thrive.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 square-it eight">
                    <div class="inner-square-it" id="circle2"> 
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/white-circle-600.png" alt="" class="img-responsive">
                             <div class="content-circle">
                                <h2>creativity.</h2>
                                <p>Never just the wild idea, never just the safe idea, but the right idea.</p>
                                <p>Moving the audience is key. It can always be better, that’s the eye and the passion of the communicator, the writer, the designer.</p>
                            </div>
                    </div>
                </div>
                <div class="col-sm-4 square-it nine">
                  <div class="inner-square-it" id="circle3">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/white-circle-600.png" alt="" class="img-responsive">
                    <div class="content-circle">
                        <h2>service.</h2>
                        <p>We keep our promises. We don’t miss deadlines. We exceed expectations. We’re fun to work with.</p>
                        <p>We have clients that have been with us for 40 years to prove it.</p>

                    </div>
                  </div>  
                </div>
            </div>
        </div>
    </div>

    <!-- testimonials
    ================================================== -->

    <div id="testimonials">  <span id="trigger-ballfade"></span>
       <div class="container">
            <div class="row inviz">
                <div class="col-sm-12"  id="fadeIn4">
                    <h2 style="text-align:center;">Speaking Volumes</h2>
                    <p>It's easy to talk about yourself, but it speaks volumes when your clients do.</p>
                 
                    <div class="my-slider">
                        <ul >
                            <li>
                                <p>“I have thoroughly enjoyed working with you and your people the past 11 years. You made my job easy because it’s easy to work with professionals who “get it” and who always work diligently in the best interest of their clients.”</p>
                            </li>
                            <li>
                               <p>"We have worked with RS+K for more than 30 years—depending on their creative talent, strategic thinking and market insights. RS+K has provided new approaches, workable solutions and always meets our deadlines. It's a partnership that we value." </p>
                            </li>
                             <li>
                               <p>"R S + K has been my go-to agency for over 15 years! They have time and time again brought very fresh ideas to our product launches and sales communications. The service and turn around they give us is outstanding, I don’t know what we’d do without them.</p>
                               <p>"They really understand our (life science) industry, and our company, so it’s very easy and smooth to work through our goals and needs with what they can create."</p>
                            </li>
                        </ul>
                    
                    </div> 
                   
                </div>
            </div>  
        </div>       
    </div>

    <!-- hard work means better delivery!!
    ================================================== -->

    <div id="hard-work" >    <div id="trigger-speakingvfade"></div>
        <video id="my-video" class="vid hidden-xs hidden-sm" autoplay muted loop poster="<?php echo get_stylesheet_directory_uri()?>/assets/img/home-video-poster.jpg">
          <source src="/wp-content/themes/bootstrap-to-wp-child/assets/video/home-background-movie.mp4" type="video/mp4">
      
        </video><!-- /video -->
        <div class="vid hidden-md hidden-lg">
            <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/home-video-poster.jpg" alt="still image of office for smaller screens">
        </div>
          <div class="row ">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 style="text-align:center;">Hard work means better delivery.</h2>
                    <p>Illustrating 40 years of bringing design and marketing solutions to our clients' brands.</p>
                    <a href="<?php bloginfo('url');?>/work" class="" style="font-size:20px; color:#fff; text-align:center; display:block; margin:50px auto; text-decoration:none;"> go to WORK  &nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/round-right.svg" alt="" width="35" id="bounceRight2" style="margin-top:-3px;"></a>

                </div>
           </div>  
        </div>       
    </div>



<?php get_footer();?>
