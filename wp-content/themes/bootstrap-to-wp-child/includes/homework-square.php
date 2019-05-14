 <div class=" col-lg-2 col-md-2 col-sm-4  col-xs-6 mbottom20" >
      <div class="hovereffect">
            <?php
                  if ( has_post_thumbnail()) {
                   echo '<a href="' . get_permalink()  . '" title="' . the_title_attribute('echo=0') . '" >';
                   the_post_thumbnail('bootstrap-small', array( 'class' => ' img-responsive' )); }
                   echo '</a>';
                   echo '<div class="overlay"><h4 class="text-center"><a href="' . get_permalink()  . '" title="' . the_title_attribute('echo=0') . '" >';
                   the_title();
                   echo '</a></h4>';
                   echo '</div>';
             ?>
       </div><!-- end hovereffect-->
 </div><!-- end cols -->