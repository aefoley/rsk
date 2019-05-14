<?php get_header();?>


<div class="m-scene" id="main">
    <div class="m-page scene_element scene_element--fadeinup">
         <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
           

            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                          <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full', array('class' => 'img-responsive boxshadow', 'style' => 'display:block; margin:0 auto;'));
                        } ?>
                    </div>
                </div><!-- end row -->

                <div class="row">
                     <div class="col-sm-8 col-sm-offset-2">

                        <div class="page-header">
                            <h1 class="text-center"><?php wp_title(''); ?></h1>
                        </div>

                        <article>
                            <?php the_content() ?>
                        </article>



                        <?php endwhile; else: ?>
                            <p>It looks like nothing was found at this location. Maybe try a search?</p>
                            <?php get_search_form(); ?>
                        <?php endif; ?>
                    </div> <!-- end col -->

                </div><!-- end row -->
                <div class="row">

                    <div class="col-xs-4  col-sm-3  col-md-3  col-lg-2"><?php previous_post_link('%link', '&laquo; Previous post'); ?></div>
                    <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-6 col-md-3 col-md-offset-6  col-lg-2 col-lg-offset-8 text-right" ><?php next_post_link('%link', 'Next post &raquo;'); ?></div>

            </div><!-- end row -->
        </div><!-- end container -->

    </div>  <!-- end fadeinup -->
</div><!-- end m-scene -->

<?php get_footer();?>
