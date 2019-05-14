<?php get_header();?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>

          <?php the_content() ?>
        
        <?php endwhile; endif; ?>

        </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
           <?php
              if (function_exists('dynamic_sidebar')) {
                  dynamic_sidebar("home-left");
              } 
            ?>
        </div>

        <div class="col-md-4">
           <?php
              if (function_exists('dynamic_sidebar')) {
                  dynamic_sidebar("home-middle");
              } 
            ?>
        </div>
        <div class="col-md-4">
          <?php
              if (function_exists('dynamic_sidebar')) {
                  dynamic_sidebar("home-right");
              } 
            ?>
        </div>
      </div>
    </div>

<?php get_footer();?>