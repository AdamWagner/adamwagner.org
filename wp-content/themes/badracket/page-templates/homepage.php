<?php
/**
 * Template Name: Homepage
 * @package   WordPress
 * @subpackage  Starkers
 * @since     Starkers 4.0
 */
?>


<?php get_template_part('parts/clusters/page-bootstrap-top'); ?>

  <div class="main">


        <?php
            query_posts(array('post_type' => 'project', 'posts_per_page' => 99 ) );

            while (have_posts()) : the_post();

              $custom_fields = get_post_custom();
              $image_count = 0;

              foreach ( $custom_fields as $field_key => $field_values ) {
                if (strpos($field_key,'image') !== false) {
                  $image_count++;
                }
              }

              $project_name = get_the_title();
              $date_range = get_post_meta($post->ID, '_aw_date_range', true);
              $involvement = get_post_meta($post->ID, '_aw_involvement', true);
              $featured_on = get_post_meta($post->ID, '_aw_featured_on', true);
              $role = get_post_meta($post->ID, '_aw_role', true);

              $primary = get_post_meta($post->ID, '_aw_primary_color', true);
              $secondary = get_post_meta($post->ID, '_aw_secondary_color', true);

              $id = 'myCarousel' . $post -> ID;
              ?>

              <div class="project" data-color-primary="<?php echo $primary; ?>" data-color-secondary="<?php echo $secondary; ?>">
                

                <div class="padded group project-header push--bottom">
                    <div class="grid s-1 m-1 b-3 ">
                      <a class="project--headline" href="<?php echo the_permalink(); ?>"><h2 class="headline--flush" style="font-weight:normal;"><?php echo $project_name; ?></h2></a>
                      <p class="type--small"><?php echo $date_range;?> &bull; <?php echo $involvement; ?> </p>
                    </div>

                    <?php if ($featured_on) {
                      echo '
                        <div class="grid s-1 m-2 b-3">
                          <p class="flush--bottom bold type--small">Featured on</p>
                          <p class="type--small muted--dark flush--bottom">' . $featured_on . '</p>
                        </div>';
                    }
                    ?>

                    <div class="grid s-1 m-2 b-3">
                      <p class="flush--bottom bold type--small">Role</p>
                      <p class="type--small muted--dark"><?php echo $role; ?></p>
                    </div>
                    
                 
                </div>



                <div class="flush--bottom project-description lead"><?php the_content() ?></div>

                <div class="push--bottom "><a class="text--underline colorable" href="<?php echo the_permalink();?>">View project details</a></div>


                <div id="<?php echo $id; ?>" class="carousel carousel-fade">


                  <div class="carousel-inner">
                    <?php
                    for( $i=1; $i < $image_count + 1; $i++ ) {
                      $image_url = wp_get_attachment_url(get_post_meta($post->ID, '_aw_image-0'.$i.'', true));
                      $image_description = get_post_meta($post->ID, '_aw_description-0'.$i.'', true);
                      $status = get_post_meta($post->ID, '_aw_status-0'.$i.'', true);
                      $date = get_post_meta($post->ID, '_aw_date-0'.$i.'', true);
                      
                      if ($i == 1)  { 
                        echo '<div class="active item">'; 
                      } else {
                        echo '<div class="item">';
                      }

                      echo '<div class="lazyload-wrapper push-half--bottom">
                              <img  class="lazyload" data-src="'.$image_url.'" src="'.get_bloginfo("template_directory").'/images/placehold.png"  alt="">
                          </div>

                          <div class="metadata in35">
                             <div class="one-half one-half grid soft-half--ends"><span class="hide-before-medium">'.$i.' of '.$image_count.' &bull;</span> '.$image_description.'</div>
                             <div class="one-half one-half grid">';
                             if ($status) {
                              echo '<div class="hide-big m-one-half b-one-half grid border-left soft-half--ends">'.$status.'</div>';
                             }
                             if ($date) {
                               echo '<div class="m-one-half b-one-half grid border-left soft-half--ends">'.$date.'</div>';
                             }
                                
                             echo '</div>
                          </div>
                      </div>';

                    }
                  ?>

                  </div>

                  <!-- Carousel nav -->
                 <a class="carousel-control left colorable hide-before-medium" href="<?php echo '#' . $id; ?>" data-slide="prev"></a>
                 <a class="carousel-control right colorable hide-before-medium" href="<?php echo '#' . $id; ?>" data-slide="next"></a>
                </div>

                
              </div>






            <?php endwhile; ?>





<?php get_template_part('parts/clusters/page-bootstrap-bottom'); ?>

