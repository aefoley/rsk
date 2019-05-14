<div id="pop-in-test" style="">

 <?php
    $args=array(
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    );
    $newsQuery4 = new WP_Query($args);
    ?>
    <?php
    if( $newsQuery4->have_posts() ) {
    while ($newsQuery4->have_posts()) : $newsQuery4->the_post(); 
    echo '<div class="row">';
    echo '<div class="col-sm-4 col-xs-4">';
    echo '<a href="' .  get_permalink()  .'" >';
        if ( has_post_thumbnail()) {
            the_post_thumbnail('thumbnail', array( 'class' => ' img-responsive boxshadow' , 'style' => 'margin:10px;')); };
        
    echo '</a></div>';
    echo '<div class="col-sm-5 col-xs-5 text-center" style = "margin:10px;">';
    echo '<a href="' .  get_permalink()  .'" >';
    the_title();
  
    echo '</a>  </div>';
    echo '</div>';

    endwhile;
    }
    wp_reset_query();
  ?>

                  
</div>