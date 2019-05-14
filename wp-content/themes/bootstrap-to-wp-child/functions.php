<?php


/**
 * Extend WordPress search to include custom fields
 *
 * http://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
   
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );


//ht http://bradsknutson.com/blog/highlight-search-terms-wordpress/

function highlight_search_term($text){
    if(is_search()){
        $keys = implode('|', explode(' ', get_search_query()));
        $text = preg_replace('/(' . $keys .')/iu', '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}
add_filter('the_excerpt', 'highlight_search_term');
add_filter('the_title', 'highlight_search_term');



function theme_styles(){
    wp_enqueue_style('bootstrap_css', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_style('custom_css', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('custom_css_child', get_stylesheet_directory_uri(). '/style.css');
 }
add_action('wp_enqueue_scripts', 'theme_styles');



function theme_child_js(){

    if ( is_page_template( 'front-page.php' ) ) {
    wp_enqueue_script('unslider', get_stylesheet_directory_uri().'/assets/js/unslider-min.js', array('jquery'), true, true);
    wp_enqueue_script('tweenmax', get_stylesheet_directory_uri().'/assets/js/gs/TweenMax.min.js', array('jquery'), true, true);
    wp_enqueue_script('timelinelite', get_stylesheet_directory_uri().'/assets/js/gs/TimelineLite.min.js', array('jquery'), true, true);
    wp_enqueue_script('tlmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TimelineMax.min.js', array('jquery'), true, true);
  
    wp_enqueue_script('scrollmagic', get_stylesheet_directory_uri().'/assets/js/gs/ScrollMagic.min.js', array('jquery'), true, true);
    wp_enqueue_script('animation_gs_scrollmagic', get_stylesheet_directory_uri().'/assets/js/gs/animation.gsap.min.js', array('jquery'), true, true);
    wp_enqueue_script('debug_scrollmagic', get_stylesheet_directory_uri().'/assets/js/gs/debug.addIndicators.min.js', array('jquery'), true, true);
    wp_enqueue_script('greensock_css', get_stylesheet_directory_uri().'/assets/js/CSSPlugin.js', array('jquery'), true, true);
    wp_enqueue_script('theme_gsap',  get_stylesheet_directory_uri(). '/assets/js/theme_child.js', array('jquery', 'bootstrap_js'), true, true);
    wp_enqueue_script('theme_scripts',  get_stylesheet_directory_uri(). '/assets/js/theme_gsap.js', array('jquery', 'bootstrap_js'), true, true);
  } else {
     wp_enqueue_script('tweenmax', get_stylesheet_directory_uri().'/assets/js/gs/TweenMax.min.js', array('jquery'), true, true);
     wp_enqueue_script('theme_scripts',  get_stylesheet_directory_uri(). '/assets/js/theme_child.js', array('jquery', 'bootstrap_js'), true, true);
  }
  
}
add_action('wp_enqueue_scripts', 'theme_child_js');

//Google fonts
function google_fonts() {
    $query_args = array(
        'family' => 'Source+Sans+Pro:300,400,600,700',
        'subset' => 'latin'
    );
    wp_enqueue_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }
            
add_action('wp_enqueue_scripts', 'google_fonts');


// FANCYBOX

function rsk_fancybox()
{
        if (( is_singular( 'work' ) ) || ( is_page() ) ){

             wp_enqueue_style('fancybox_css', get_stylesheet_directory_uri(). '/assets/js/source/jquery.fancybox.css');

            wp_register_script('jquery_fancybox', get_stylesheet_directory_uri(). '/assets/js/source/jquery.fancybox.pack.js', array('jquery'), true, true);
            wp_enqueue_script('jquery_fancybox');

            wp_register_script('jquery_fancybox_media', get_stylesheet_directory_uri(). '/assets/js/source/helpers/jquery.fancybox-media.js', array('jquery', 'jquery_fancybox'), true, true);
            wp_enqueue_script('jquery_fancybox_media');
      

            add_action('wp_footer', 'rsk_add_fancybox');

            function rsk_add_fancybox(){ ?>

                <script>
                    jQuery(document).ready(function($) {
                       $('.fancybox-media')
                            .attr('rel', 'media-gallery')
                            .fancybox({
                                arrows : false,
                                helpers : {
                                    media : {},
                                    buttons : {},
                                    overlay: {locked: false} //keeps page under fancybox from rocketing to top - http://davekiss.com/prevent-fancybox-from-jumping-to-the-top-of-the-page/
                            }
                        });//end media

                    });//end ready

                </script>
                <?php
                }
      
        }

}
add_action( 'wp_head', 'rsk_fancybox' );   

   
/**
* Provides a standard format for the page title depending on the view. This is
* filtered so that plugins can provide alternative title formats.
*
* @param       string    $title    Default title text for current view.
* @param       string    $sep      Optional separator.
* @return      string              The filtered title.
* @package     mayer		 * @subpackage  includes
* @version     1.0.0		 * @since       1.0.0		 */

function aef_wp_title( $title, $sep ) {

    global $paged, $page;

    if ( is_feed() ) {
        return $title;
    }// end if

    // Add the site name.
    //$title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) {
            $title = "$title $sep $site_description";
        } // end if

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 ) {
        $title = sprintf( __( 'Page %s', 'mayer' ), max( $paged, $page ) ) . " $sep $title";
    } // end if

    return $title;
    } // end aef_wp_title

add_filter( 'wp_title', 'aef_wp_title', 10, 2 );


/**
 * Define theme's menus
 *
 */

function register_theme_menus(){
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'utility-menu-1' => __('Utility Menu'),
            'top-nav' => __('Top Nav'),
            'thirty-eight-yrs-menu'  => __('Thirty Eight Years Sidebar Menu')
        )
    );
}
add_action('init', 'register_theme_menus');

/**
 * Image sizes
 *
 */
function setup_image_sizes(){

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(200,200, true);
        add_image_size('bootstrap-xs', 150,120, true); //for the logos.
        add_image_size('bootstrap-small', 300,300, true);
        add_image_size('bootstrap-medium', 400,400, true);
        add_image_size('bootstrap-large', 800,800, true);
        add_image_size('news-hero', 800,300, true);
}
add_action('init', 'setup_image_sizes');

/**
 * // Add Shortcode for container
 *
 */

function bs_container( $atts, $content = "" ) {
    return "content = $content";
}
add_shortcode( 'bs_container', 'bs_container' );



// /**
//  * Define theme's widget areas.
//  *
//  */

function bootstrapwp_widgets_init() {

     register_sidebar(
        array(
            'name'          => __( 'Subscribe', 'bootstrap-to-wp-child' ),
            'id'            => 'newsletter_subscribe_sidebar',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
            'before_widget' => '',
            'after_widget'  => '',
        )
    );

}

add_action( 'widgets_init', 'bootstrapwp_widgets_init' );



// /**
//  * Changes image captions to overlays. From the Codex.
//  *
//  */


add_filter( 'img_caption_shortcode', 'my_img_caption_shortcode', 10, 3 );

function my_img_caption_shortcode( $empty, $attr, $content ){
    $attr = shortcode_atts( array(
        'id'      => '',
        'align'   => ' alignnone',
        'width'   => '',
        'caption' => ''
    ), $attr );

    if ( 1 > (int) $attr['width'] || empty( $attr['caption'] ) ) {
        return '';
    }

    if ( $attr['id'] ) {
        $attr['id'] = 'id="' . esc_attr( $attr['id'] ) . '" ';
    }

    return '<figure ' . $attr['id']
    . 'class="wp-caption ' . esc_attr( $attr['align'] ) . '" '
    . 'style="max-width: ' . ( $attr['width'] ) . 'px;">'
    . do_shortcode( $content )
    . '<figcaption class="wp-caption-text overlay">' . $attr['caption'] 
    . '</figcaption>';

}

/**
 * Remove unused admin menu items
 *
 */

function remove_menus(){
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments

  if ( !current_user_can( 'manage_options' ) ) {
        remove_menu_page( 'edit.php?post_type=acf-field-group');
        remove_menu_page( 'themes.php' );                 //Appearance  
    }    
   remove_menu_page( 'admin.php?page=wpengine-common  ' ); 
}

add_action( 'admin_menu', 'remove_menus' );


/**
 * Re-order admin menu
 *
 */
function reorder_admin_menu( $__return_true ) {
    return array(
        'index.php',                                // Dashboard
        'separator1',                               // --Space--      
        'upload.php',                               // Media
        'edit.php?post_type=news',                  // News posts
        'edit.php?post_type=work',                  // Work posts
        'edit.php?post_type=experience',            // Experience posts
        'edit.php?post_type=page',                  // Page
        'separator2',                               // --Space--      

        'edit.php?post_type=page=gf_edit_forms',    // Gravity Forms
        'themes.php', // Appearance
        'users.php', // Users
        'plugins.php', // Plugins
        'tools.php', // Tools
        'options-general.php', // Settings
   );
}
add_filter( 'custom_menu_order', 'reorder_admin_menu' );
add_filter( 'menu_order', 'reorder_admin_menu' );

// /**
//  * Custom excerpt
//  *
//  */

// add more link to excerpt
function custom_excerpt_more($more) {
   global $post;
   return '...<a class="more-link" href="'. get_permalink($post->ID) . '">'. '&nbsp; &nbsp; Read more &raquo; ' .'</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');




// /**
//  * Register custom post types
//  *
//  */

add_action( 'init', 'register_work_posttype' );

    function register_work_posttype () {

        $work_labels = array(
        'name' => 'Work',
        'singular_name' => 'Work',
        'all_items' => 'All Work Posts',
        'add_new' => 'Add new Work Post',
        'add_new_item' => 'Add New Work Post',
        'edit_item' => 'Edit Work Post',
        'new_item' => 'New Work Post',
        'view_item' => 'View Work Post',
        'search_items' => 'Search in Work Posts',
        'not_found' =>  'No Work Post found',
        'not_found_in_trash' => 'No Work Posts found in trash',
        'parent_item_colon' => '',
        'menu _name' => 'Work Post'
    );

        $args = array(
        'labels' => $work_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-art',
        'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
        'has_archive' => false

            );
        register_post_type( 'work', $args );

}

add_action( 'init', 'register_experience_posttype' );

    function register_experience_posttype () {

        $experience_labels = array(
        'name' => 'Experience',
        'singular_name' => 'Experience',
        'all_items' => 'All Experience Posts',
        'add_new' => 'Add new Experience Post',
        'add_new_item' => 'Add New Experience Post',
        'edit_item' => 'Edit Experience Post',
        'new_item' => 'New Experience Post',
        'view_item' => 'View Experience Post',
        'search_items' => 'Search in Experience Posts',
        'not_found' =>  'No Experience Post found',
        'not_found_in_trash' => 'No Experience Posts found in trash',
        'parent_item_colon' => '',
        'menu _name' => 'Experience Post'
    );

        $args = array(
        'labels' => $experience_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-admin-generic',
        'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
        'has_archive' => false,
        'exclude_from_search' => true

            );
        register_post_type( 'experience', $args );

}

add_action( 'init', 'register_news_posttype' );

    function register_news_posttype () {

        $news_labels = array(
        'name' => 'News',
        'singular_name' => 'News',
        'all_items' => 'All News Posts',
        'add_new' => 'Add new News Post',
        'add_new_item' => 'Add New News Post',
        'edit_item' => 'Edit News Post',
        'new_item' => 'New News Post',
        'view_item' => 'View News Post',
        'search_items' => 'Search in News Posts',
        'not_found' =>  'No News Post found',
        'not_found_in_trash' => 'No News Posts found in trash',
        'parent_item_colon' => '',
        'menu _name' => 'News Post'
    );

        $args = array(
        'labels' => $news_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 3,
        'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
        'has_archive' => false,
        'exclude_from_search' => true

            );
        register_post_type( 'news', $args );

}
?>
