<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

 

    <link rel="icon" href="<?php echo get_stylesheet_directory_uri()?>/assets/img/favicon.ico">


    <style type="text/css">    
    
    </style>

      <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110036986-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110036986-1');
    </script>

    <title>RS+K<?php wp_title('•', true, 'left'); ?> </title>

    <?php wp_head(); ?>
    <!-- <noscript><link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri()?>/assets/css/noscript.css' type='text/css' media='all' />
</noscript> -->
  </head>

<body <?php body_class();?>>

<nav class="navbar navbar-default navbar-fixed-top banner">
    
            <div class="container">
               <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 navbar-brand">
                      <a  href="<?php bloginfo('url');?>"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/logo.png"  alt="RS+K logo"></a>
                  </div>
                  <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-0 col-xs-6">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          </button>
                          <?php
                          wp_nav_menu( array(
                            'theme_location'    => 'main-menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'navbar',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                          );
                          ?>
                      </div>

              </div>
           </div> <!-- row -->
    </div><!-- container -->
</nav>
<div class="page-wrap"  id="top">

