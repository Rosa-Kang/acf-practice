<?php
/**
 * Template part for displaying accordion - jobs.
 *
 * @package White_Canvas_Design_Theme
 */
?>
<section class="jobs">
  <div class="accordion-container container-sm content-wrapper pt-0">
    <?php 
    /** 
     * Get the job entries
     */ 
    $args = array( 
      'post_type' => 'jobs',
      'posts_per_page' => '-1',
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $jobs_posts = get_posts( $args ); ?>
      <?php if ( $jobs_posts ): ?>
        <ul class="jobs-wrapper accordions">
          <?php 
          foreach ( $jobs_posts as $post ) : setup_postdata( $post );
          $post_id = get_field( 'careers_id', 'option' );
          $title = get_the_title();
          $content = get_field( 'job_content' );
          $button_label_1 = get_field( 'accordion_button_label_1', $post_id );
          $button_link_1 = get_field( 'job_description' );
          $button_label_2 = get_field( 'accordion_button_label_2', $post_id );
          $button_link_2 = get_field( 'job_email' );

          if( $button_link_1 ){
            $link_url = $button_link_1[ 'url' ];
            $link_title = custom_file_title( $button_link_1[ 'title' ] );
          }
  
          $control = strtolower( preg_replace( "/[^A-Za-z0-9\-]/", "", str_replace( " ", "-", $title ) ) );
          ?>
            <li class="job-posting accordion py-3 px-4 mb-4 has-background-primary">
              <div class="accordion-header">
                <h3 class="mb-0">
                  <button aria-expanded="true" class="accordion-control p-0" aria-controls="<?php echo $control; ?>" id="<?php echo $control . '-' . $i; ?>" aria-label="<?php echo $control; ?>">
                    <?php echo $title; ?>
                    <span class="accordion-icon-wrapper"><?php get_template_part( 'template-parts/icon/icon-plus' ); ?><?php get_template_part( 'template-parts/icon/icon-minus' ); ?></span> 
                  </button>   
                </h3>
              </div>
              <div class="accordion-body" id="<?php echo $control; ?>" role="region" aria-labelledby="<?php echo $control . '-' . $i; ?>">
                <div class="accordion-content pt-3">
                  <?php echo $content; ?>
                  <?php if( $button_link_1 ): ?>
                    <div class="buttons-wrapper mb-5">
                      <div class="has-text-centered">
                        <a href="<?php echo esc_url( $link_url ); ?>" class="button is-light" title="<?php echo $link_title; ?>"><?php echo $button_label_1; ?></a> 
                      </div>
                      <div class="has-text-centered">
                        <a class="button is-light" href="mailto:<?php echo $button_link_2; ?>"><?php echo $button_label_2; ?></a> 
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </li><!-- .job-posting .accordion -->
          <?php endforeach; wp_reset_postdata(); ?>
        </ul><!-- .jobs-wrapper .accordions -->
      <?php else: ?>
        <p>No jobs posted at this time, please check back soon.</p>
      <?php endif; ?>
  </div><!-- .accordion-container -->
</section><!-- .jobs -->
