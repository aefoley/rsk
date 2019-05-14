<?php get_header();?>


<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
<div class="m-scene" id="main">
  <div class="m-page scene_element scene_element--fadeinup">
        <div class="row section-title">
            <div class="container">
                <h1 class="section-title-inside"><?php the_title(); ?></h1>
               
            </div>
        </div><!-- ./jumbotron -->


        <div class="container">
            <div class="row content">
                <div class="col-md-12">
                        <?php the_content() ?>

                    <?php endwhile; else: ?>

                          <p>It looks like nothing was found at this location. Maybe try a search?></p>
                        <?php get_search_form(); ?>

                    <?php endif; ?>

                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</div>

<?php get_footer();?>
