 <div class=" col-lg-3 col-md-3 col-sm-6  col-xs-6 mbottom20" >
      <div class="hovereffect">
            <?php
                  if ( has_post_thumbnail()) {
                   echo '<a href="' . get_permalink()  . '" title="' . the_title_attribute('echo=0') . '" >';
                   the_post_thumbnail('bootstrap-medium', array( 'class' => ' img-responsive' )); }
                   echo '<div class="overlay"><h4 class="text-center"><a href="' . get_permalink()  . '" >';
                   the_field('company_name');
                   echo '</a></h4></div>';
             ?>
       </div><!-- end hovereffect-->
 </div><!-- end cols -->