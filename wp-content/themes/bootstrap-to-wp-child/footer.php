
</div><!-- end page wrap -->

<footer class="footer">
    <div class="container">
    
        <div class="row" id="scroll-up">
              <div class="col-lg-2  col-lg-offset-0 col-md-2  col-md-offset-0 col-sm-2 col-sm-offset-0 logo">
                   <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/RSKlogo_reverse.svg" alt="logo" class="img-responsive">
                <br>
                   155 E Wilson Street, Suite 100<br>
                   Madison, WI 53703 <br>
                   608-827-0701 <br>
                   info@rsandk.com

                   <br>
                   <br>
                   &copy;<?php echo date('Y'); ?>  RS+K. All rights reserved.

                </div><!-- /.col -->

                <div class="col-lg-7 col-lg-offset-0 col-md-7  col-md-offset-0 col-sm-8 col-sm-offset-0 right-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                              wp_nav_menu( array(
                                  'theme_location'    => 'utility-menu-1',
                                  'depth'             => 2,
                                  'container'         => 'div',
                                  'menu_class'        => 'footer-utility-menu')
                              );
                              ?>
                        </div>
                    </div>
                    <div class="row mbottom40 hidden-xs">&nbsp;</div>
                     <div class="row visible-xs"><hr></div>
                  
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-12 social">
                            <a href="https://www.facebook.com/Reed-Sendecke-Krebsbach-RSK-168244614113/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fbwhite.svg" alt="facebook icon" class="img-responsive social"/></a>
                            <a href="https://www.linkedin.com/company/r-s-k?trk=company_logo" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/liwhite.svg" alt="facebook icon" class="img-responsive social"></a>
                            <a href="https://www.youtube.com/channel/UCOrRlXSU7WwQrMGJssueHHA" target=_"blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ytwhite.svg" alt="facebook icon" class="img-responsive social"/></a>
                            <a href="https://twitter.com/RSandK_Inc" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/twwhite.svg" alt="twitter icon" class="img-responsive social"/></a>
                        </div>
                        <div class="col-lg-7 col-lg-offset-1 col-md-7">
                            <?php get_search_form(); ?>
                        </div>
                    </div>

                </div>
                <!-- <a class="scroll-to-top" href="#top"><span class="up"></span></a> -->

                <a href="javascript:" id="return-to-top"><!-- <span class="glyphicon glyphicon-chevron-up up"></span> --></a>

            </div><!-- /.row -->
          </div><!-- /.container -->

   
</footer>



<?php wp_footer(); ?>

</body>

</html>
