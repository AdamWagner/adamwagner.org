<?php
/**
 * @package   WordPress
 * @subpackage  Starkers
 * @since     Starkers 4.0
 */
?>


<?php get_template_part('parts/clusters/page-bootstrap-top'); ?>

  <div class="main">


<?php
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
      $featured_on = get_post_meta($post->ID, '_aw_featured_on', true);
      $role = get_post_meta($post->ID, '_aw_role', true);

      $primary = get_post_meta($post->ID, '_aw_primary_color', true);
      $secondary = get_post_meta($post->ID, '_aw_secondary_color', true);

      $next = get_next_custom_post();
      $prev = get_previous_custom_post();
      ?>

      <div class="project" data-color-primary="<?php echo $primary; ?>" data-color-secondary="<?php echo $secondary; ?>">

        <div class="padded group project-header push--bottom position--relative">
            <?php if (get_next_custom_post()):?>
              <a href="<?php next_custom_post();?>" class="project--nav project--nav__back hide-medium colorable">◀</a>
            <?php endif; ?>

            <div class="grid s-1 m-1 b-3 ">
              <h2 class="headline--flush" style="font-weight:normal;"><?php echo $project_name; ?></h2>
              <p class="type--small">June 2010 - present &bull; part time</p>
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

            <?php if (get_previous_custom_post()):?>
              <a href="<?php previous_custom_post();?>" class="project--nav project--nav__forward colorable">▶</a>
            <?php endif; ?>
            
        </div>

        <div class="project-description lead"><?php the_content() ?></div>


        <?php
        for( $i=1; $i < $image_count + 1; $i++ ) {
          $image_url = wp_get_attachment_url(get_post_meta($post->ID, '_aw_image-0'.$i.'', true));
          $image_description = get_post_meta($post->ID, '_aw_description-0'.$i.'', true);
          $status = get_post_meta($post->ID, '_aw_status-0'.$i.'', true);
          $date = get_post_meta($post->ID, '_aw_date-0'.$i.'', true);
          

          echo '
              <div class="project--image group push--bottom">
                <div class="lazyload-wrapper">
                    <img  class="lazyload" data-src="'.$image_url.'" src="'.get_bloginfo("template_directory").'/images/placehold.png"  alt="">
                </div> </div>';

        }

        echo '<div class="push--top group">';

        if (get_next_custom_post()):?>
         <a href="<?php next_custom_post();?>" class="colorable float--left">◀&nbsp;&nbsp;Previous project</a>
        <?php endif; ?>

        <?php if (get_previous_custom_post()): ?>
          <a href="<?php previous_custom_post();?>" class="colorable float--right">Next Project&nbsp;&nbsp;▶</a>
        <?php endif; ?>

        </div>

        <?php endwhile; ?> 



<?php get_template_part('parts/clusters/page-bootstrap-bottom'); ?>

