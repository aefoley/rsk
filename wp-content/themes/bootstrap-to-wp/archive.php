<?php get_header();?>

  
<div class="container">
    <div class="row">
        <div class="col-md-9">

            <div class="page-header">
                <h1><?php wp_title(); ?></h1>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
                
                <article>

                    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                    <p> in <?php the_category(', '); ?>
                    <?php the_excerpt(); ?>

                </article>

            <?php endwhile; else: ?>

                 <p>It looks like nothing was found at this location. Maybe try a search?></p>
                <?php get_search_form(); ?>

            <?php endif; ?>

        </div><!-- end col -->

        <?php get_sidebar('blog'); ?>


    </div><!-- end row -->
</div><!-- end container -->

<?php get_footer();?>