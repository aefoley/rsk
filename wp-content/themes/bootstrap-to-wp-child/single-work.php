<?php get_header();?>
<div class="col-xs-4  col-sm-2  col-md-2  col-lg-2"><?php previous_post_link('%link', '<div class="btn btn-default prev"> &#x25C4; &nbsp;</div>'); ?>
</div>
<div class="col-xs-4  col-sm-2  col-md-2  col-lg-2"><?php next_post_link('%link', '<div class="btn btn-default next">&nbsp; &#x25BA;</span> </div>'); ?>
</div>

<div class="m-scene" id="main">
    <div class="m-page scene_element scene_element--fadeinup">

        <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>

      
       
        <div class="hero">
            <?php  if( get_field('featured_video') ): ?> 

                 <a class="fancybox-media" href="<?php the_field('featured_video'); ?>">
               
           <?php endif; ?> 

            <?php if ( has_post_thumbnail()) {
                the_post_thumbnail('full', array( 'class' => ' img-responsive', 'style' => 'width:100%' ));
                } 
             ?>

              <?php  if( get_field('featured_video') ): ?> 
               <div class="play-vid"> Play video<img src="/wp-content/themes/bootstrap-to-wp-child/assets/img/round-right.svg" /></div> 

                    </a>
             <?php endif; ?> 
                </div> 
           
        </div>    

        <div class="container-fluid">
            <div class="row intro-text">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                     <h1 class="section-title-inside text-center"><?php wp_title(''); ?>  </h1>
                   
                    <p class="tagline-span"><?php the_field('page_tagline'); ?></p>
                     <?php the_field('introductory_text'); ?>
                   
                </div><!-- end col -->

            </div><!-- end row -->
        </div>
        <div class="container">
                <div class="row content">
                    <div class="col-md-12 hovereffect2" id="content">
                            <article>
                                <?php 
                                    the_content();
                                ?>
                            </article>

                        <?php endwhile; else: ?>
                            <p>It looks like nothing was found at this location. Maybe try a search?></p>
                            <?php get_search_form(); ?>
                        <?php endif; ?>

                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
            
            
    </div>  <!-- end fadeinup -->
</div><!-- end m-scene -->

<?php get_footer();?>


