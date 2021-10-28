<?php
/**
 * Template part for displaying cards - suites.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php 
$section = get_field( 'section_button_label' );
$section_name = strtolower( str_replace(" ", "-", $section ) );
$title = get_field( 'featured_posts_title' ); 
$subtitle = get_field( 'featured_posts_subtitle' ); 
$button_label = get_field( 'featured_posts_button_label' ); 
$single_button_label = get_field( 'featured_posts_single_button_label' ); 
$single_button_link = get_field( 'featured_posts_single_button_link' ); 
$featured_posts = get_field( 'featured_posts' );

if( $single_button_link ){
  $link_url = $single_button_link[ 'url' ];
  $link_target = $single_button_link[ 'target' ] ? $single_button_link[ 'target' ] : '_self';
}
?>
<a class="anchor" id="<?php echo $section_name; ?>"></a>
<section class="cards-suites content-wrapper">
  <div class="cards-suites-container has-background-primary py-5">
    <div class="container content-wrapper">
      <?php if( $subtitle ): ?>
        <p class="subtitle has-text-centered mb-3"><?php echo $subtitle; ?></p>
      <?php endif; ?>
      <h2 class="mb-5 has-text-centered"><?php echo $title; ?></h2>
      <div class="has-text-centered mb-3">
        <?php get_template_part( 'template-parts/icon/icon-leaf-white' ); ?>
      </div>
      <?php if( $featured_posts ): ?>
        <div class="columns is-mobile is-multiline is-variable is-0-mobile is-3-tablet is-5-desktop is-6-widescreen is-7-fullhd accordions tabs is-justify-content-flex-start">
          <?php 
          $i = 0;
          foreach ( $featured_posts as $featured_post ): 
            $title = get_the_title( $featured_post->ID );
            $size = get_field( 'suite_size', $featured_post->ID );
            $link = strtolower( str_replace(" ", "-", $name ) );
            $content = get_post_field( 'post_content', $featured_post->ID );
            $image = wp_get_attachment_url( get_post_thumbnail_id( get_option( 'page', $featured_post->ID ) ) );
            $image_alt = get_post_meta( get_post_thumbnail_id( get_option( 'page', $featured_post->ID ) ), '_wp_attachment_image_alt', true );
            $control = strtolower( preg_replace( "/[^A-Za-z0-9\-]/", "", str_replace( " ", "-", $title ) ) );

            $images = get_field( 'suite_gallery', $featured_post->ID );
            $show_gallery = get_field( 'show_suite_gallery', $featured_post->ID );
          ?>
            <div class="column is-full-mobile is-4-tablet is-flex mb-3 accordion">
              <div class="card is-shadowless w-100 has-background-primary accordion-header">  
                <div class="card-image">
                  <figure class="image mx-0 my-0">
                    <img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>" class="no-lazyload">
                  </figure>
                </div><!-- .card-image -->         
                <div class="card-content card-content-wrapper pt-0">
                  <div class="content has-text-centered">
                    <h3 class="is-family-secondary mb-1"><?php echo $title; ?></h3>
                    <?php get_template_part( 'template-parts/border/separator' ); ?>
                    <div class="is-hidden-tablet">
                      <a href="#<?php echo $link; ?>" class="button is-light accordion-control p-0" aria-controls="<?php echo $control; ?>" id="<?php echo $control . '-' . $i; ?>" aria-label="<?php echo $control; ?>"><?php echo $button_label; ?></a>
                    </div>
                    <div class="is-hidden-mobile">
                      <!-- <a href="#<?php echo $i++ . '-' .  $control; ?>" class="button is-light tab-button p-0" data-tab="<?php echo $i++; ?>"><?php echo $button_label; ?></a> -->
                      <a href="#suites-info" class="button is-light tab-button p-0" data-tab="<?php echo $i++; ?>"><?php echo $button_label; ?></a>
                    </div>

                  </div><!-- .content -->
                </div><!-- .card-content -->
              </div><!-- .card .accordion-header -->

              <div class="accordion-body has-background-primary is-hidden-tablet" id="<?php echo $control; ?>" role="region" aria-labelledby="<?php echo $control . '-' . $i; ?>">
                <div class="accordion-content">
                  <div class="columns is-mobile is-multiline is-gapless">
                    <div class="column is-full-mobile is-6-tablet">
                      <p class="subtitle has-text-centered"><?php echo $size; ?>&nbsp;SQ FT.</p>
                      <p><?php echo $content; ?></p>
                    </div>
                    <?php if ( $show_gallery ): ?>
                      <div class="column is-full-mobile is-6-tablet">
                        <?php get_template_part( 'template-parts/section/gallery', null, array( 'gallery' => $images ) ); ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div><!-- .accordion-body -->

            </div><!-- .column -->
          <?php endforeach; ?>
        </div><!-- .columns .accordions .tabs -->

        <div id="suites-info" class="anchor"></div>
        <div class="tabs-content is-hidden-mobile">
          <div class="columns is-tablet is-multiline is-gapless">
            <?php 
            $i = 0;
            foreach ( $featured_posts as $featured_post ): 
              $title = get_the_title( $featured_post->ID );
              $size = get_field( 'suite_size', $featured_post->ID );
              $content = get_post_field( 'post_content', $featured_post->ID );
              $images = get_field( 'suite_gallery', $featured_post->ID );
              $main_image = wp_get_attachment_url( get_post_thumbnail_id( get_option( 'page', $featured_post->ID ) ) );
              $main_image_alt = get_post_meta( get_post_thumbnail_id( get_option( 'page', $featured_post->ID ) ), '_wp_attachment_image_alt', true );
              $show_gallery = get_field( 'show_suite_gallery', $featured_post->ID );
              $control = strtolower( preg_replace( "/[^A-Za-z0-9\-]/", "", str_replace( " ", "-", $title ) ) );
            ?>
              <!-- <div id="<?php echo $i++ . '-' .  $control; ?>" class="column is-full" data-content="<?php echo $i++; ?>"> -->
              <div class="column is-full" data-content="<?php echo $i++; ?>">
                <div class="columns is-tablet is-multiline is-variable is-0-mobile is-3-tablet is-5-desktop is-6-widescreen is-7-fullhd">
                  <div class="column is-5-tablet is-6-desktop">
                    <?php
                    if ( $show_gallery ){
                      get_template_part( 'template-parts/section/gallery', null, array( 'gallery' => $images ) );
                    } else {
                    ?>
                      <figure class="image mx-0 my-0">
                        <img src="<?php echo $main_image; ?>" alt="<?php echo $main_image_alt; ?>" class="no-lazyload">
                      </figure>
                    <?php } ?>
                  </div>
                  <div class="column is-7-tablet is-6-desktop">
                    <h3 class="is-family-secondary mb-1 has-text-centered"><?php echo $title; ?></h3>
                    <?php get_template_part( 'template-parts/border/separator' ); ?>
                    <p class="subtitle has-text-centered"><?php echo $size; ?>&nbsp;SQ FT.</p>
                    <p><?php echo $content; ?></p>
                    <?php if( $single_button_link ): ?>
                      <div class="has-text-centered pt-3">
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button is-light"><?php echo $single_button_label; ?></a> 
                      </div>
                    <?php endif; ?>
                  </div>
                </div><!-- .columns -->
              </div><!-- .column -->
            <?php endforeach; ?>
          </div><!-- .columns -->
        </div><!-- .tabs-content -->

      <?php endif; ?>
    </div>
  </div>
</section><!-- .cards-suites -->