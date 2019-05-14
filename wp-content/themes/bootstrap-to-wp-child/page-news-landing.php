<?php
/**
 * Template Name: News Section Landing
 *
 */
get_header(); ?>
<div class="m-scene" id="main">
    <div class="m-page scene_element scene_element--fadeinup">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                 <h1 class="section-title-2"><?php the_title(); ?> </h1>
                 </div>
            </div><!-- /.row -->
            <hr class="mtop10 mbottom40">
           <div class="row">
             <?php
                    $args=array(
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    );
                    $newsQuery2 = new WP_Query($args);
                    ?>
                    <?php
                    if( $newsQuery2->have_posts() ) {
                    while ($newsQuery2->have_posts()) : $newsQuery2->the_post(); 
                    echo '<div class="col-sm-8">';
                        if ( has_post_thumbnail()) {
                            echo '<a href="' . get_permalink()  . '" title="' . the_title_attribute('echo=0') . '" >';
                            the_post_thumbnail('full', array( 'class' => ' img-responsive boxshadow', 'style' => 'width:100%;' )); }
                        
                    echo '</a></div><div class="col-sm-4">';
                    echo '<h3><a href="' .  get_permalink()  .'">';
                    the_title();
                    echo '</a></h3>' ;
                    echo '<p class="small">';
                    the_time('F j, Y');
                    echo '</p> ';
                    the_excerpt();
                    // echo '<p><a href="'.  get_permalink()  .'">';
                    // echo 'Read more &raquo;';
                    // echo '</a></p>';
                    echo '</div>';

                    endwhile;
                    }
                    wp_reset_query();
                    ?>
      
            </div><!-- /.row -->
            
            <hr class="mtop40 mbottom40">
                <div class="row">
                    <div class="col-sm-8">

                        <h3 class="mbottom30 mtop0" >Previous posts:</h3>
                        <div class="row">
                            <?php
                                $args=array(
                                'post_type' => 'news',
                                'post_status' => 'publish',
                                'posts_per_page' => 16,
                                 'offset' => 1,
                                );
                                $newsQuery3 = new WP_Query($args);
                                ?>

                                <?php
                                if( $newsQuery3->have_posts() ) {
                                while ($newsQuery3->have_posts()) : $newsQuery3->the_post(); 
                                echo '<div class="col-sm-3 newsthumb">';
                                    if ( has_post_thumbnail()) {
                                        echo '<a href="' . get_permalink()  . '" title="' . the_title_attribute('echo=0') . '" >';
                                        the_post_thumbnail('bootstrap-medium', array( 'class' => ' img-responsive boxshadow')); 
                                        };

                                echo '<h4 class="landing-title"><a href="' .  get_permalink()  .'">';
                                the_title();
                                echo '</a></h4>';
                                echo '<p class="small">';

                                the_date();
                                echo '</p> </div>';


                                 endwhile;
                                }
                                wp_reset_query();
                            ?>
                             
                            

                      
                        </div><!-- /.row -->
                     </div><!-- /.col-sm-9 -->

                    <div class="col-sm-3 col-sm-offset-1 subscribe-box">
                      
                        <?php dynamic_sidebar( 'newsletter_subscribe_sidebar' ); ?>

   
                            
                        </div>
                       
                    </div>

                </div><!-- /.row -->
                
        </div> <!-- end container -->
     </div>  <!-- end fadeinup -->
</div><!-- end m-scene -->

<?php get_footer(); ?>
