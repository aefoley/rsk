<?php
/**
 * Template Name: Work Section Landing
 *
 */
get_header(); ?>
<div class="m-scene" id="main">
    <div class="m-page scene_element scene_element--fadeinup">
        <div class="container  intro-text">

            <div class="row">
                <div class="col-sm-12">
                <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
                <h1 class="section-title"> <?php the_title(); ?></h1>
                 </div>
            </div>

            <div class="row ">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <?php the_content() ?>
                    <?php endwhile; else: ?>
                      <p>It looks like nothing was found at this location. Maybe try a search?></p>
                    <?php get_search_form(); ?>
                    <?php endif; ?>
                </div><!-- end col -->
            </div><!-- end row -->

        </div>
    
        <div class="container"><br><br>
            <div class="row content">
                 
                 <?php
                     $args=array(
                     'post_type' => 'work',
                     'post_status' => 'publish',
                     'posts_per_page' => 20,
                     'order' => 'ASC',
                     'orderby' => 'date',
                    
                     );
                     $workQuery = new WP_Query($args);
                 ?>

                     <?php
                         if( $workQuery->have_posts() ) {
                         while ($workQuery->have_posts()) : $workQuery->the_post();

                         include 'includes/landingwork-square.php';
                         endwhile;
                         }
                         wp_reset_query();
                         ?>
                 
            </div><!-- .row content -->
        </div><!--/.container -->
    </div>  <!-- end fadeinup -->
</div><!-- end m-scene -->

<?php get_footer(); ?>
