<?php 
/*
    Template Name: Full Width Template
*/
?>

<?php get_header();?>

<div class="m-scene" id="main">
    <div class="m-page scene_element scene_element--fadeinup">
          
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
                        
                        <div class="page-header">
                        <h1 class="text-center"><?php the_title(); ?></h1>
                        </div>

                        <?php the_content() ?>

                    <?php endwhile; else: ?>

                          <p>It looks like nothing was found at this location. Maybe try a search?></p>
                        <?php get_search_form(); ?>

                    <?php endif; ?>

                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
     </div><!-- end m-scene -->
</div><!-- end scene-element -->

<?php get_footer();?>