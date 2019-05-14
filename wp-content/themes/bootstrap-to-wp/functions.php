<?php


// Register Custom Navigation Walker
require_once('includes/wp_bootstrap_navwalker.php');

function theme_js(){

    global $wp_scripts;
    wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '',  false);
    wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '',  false);

    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

    wp_enqueue_script('bootstrap_js',  get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), true);
    wp_enqueue_script('theme_js',  get_template_directory_uri(). '/assets/js/theme.js', array('jquery', 'bootstrap_js'), true);
}
add_action('wp_enqueue_scripts', 'theme_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');




?>