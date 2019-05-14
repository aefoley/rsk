<?php
/**
 * Template Name: Experience Section Landing
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
        <div class="col-sm-8 col-sm-offset-2">
            <?php the_content() ?>
            <?php endwhile; else: ?>
              <p>It looks like nothing was found at this location. Maybe try a search?></p>
            <?php get_search_form(); ?>
            <?php endif; ?>
        </div><!-- end col -->
    </div><!-- end row -->

</div>


        <div class="container experience">
            <div class="row content">
                <div class="col-lg-12  col-md-12 col-sm-12  col-xs-12 logo-thumbs">

                     <?php
                         $args=array(
                         'post_type' => 'experience',
                         'post_status' => 'publish',
                         'meta_key'         => 'order',
                         'orderby'           => 'meta_value_num',
                         'order'             => 'ASC',
                         'posts_per_page' => 40,

                         );
                         $experienceQuery = new WP_Query($args);
                     ?>

                         <?php


                             if( $experienceQuery->have_posts() ) {
                             while ($experienceQuery->have_posts()) : $experienceQuery->the_post(); ?>

                             <?php if ( has_post_thumbnail() ) {
                             echo "<div class='col-xs-4 col-sm-3 col-m-3 col-lg-2 logo-thumbs'>";
                               the_post_thumbnail('bootstrap-xs', array('class' => 'tooltip-right img-responsive', 'title'=>''.get_field('rsk_tasks').'', 'data-toggle'=>'tooltip'));
                                    echo "</div>";
                             }
                             ?>


                             <?php
                             endwhile;
                             }
                             wp_reset_query();
                             ?>

                 </div>

            </div><!-- .row content -->
        </div><!--/.container -->

    </div>  <!-- end fadeinup -->
</div><!-- end m-scene -->



<?php get_footer(); ?>