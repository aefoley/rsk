<?php get_header();?>

<div class="row section-title">
    <div class="container">
          <div >
           <?php the_title(); ?>
        </div>
    </div>
</div><!-- ./jumbotron -->

<div class="container ">
    <div class="row">
        <div class="col-md-12 content">
            <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>

                <?php the_content() ?>

            <?php endwhile; else: ?>

                 <p>It looks like nothing was found at this location. Maybe try a search?</p>
                <?php get_search_form(); ?>

            <?php endif; ?>

        </div><!-- end col -->

    </div><!-- end row -->

</div><!-- end container -->

<?php get_footer();?>
