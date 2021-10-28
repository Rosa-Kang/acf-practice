<?php
/**
 * Template part for displaying callout with image - center.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$video = get_field( 'callout_image_center_video' );
$image = get_field( 'callout_image_center' ); 
$title = get_field( 'callout_image_center_title' );
$content = get_field( 'callout_image_center_content' );
$button_label = get_field( 'callout_image_center_button_label' );
$button_link = get_field( 'callout_image_center_button_link' );
$button_file = get_field( 'callout_image_center_button_file' );
$button_menu = get_field( 'callout_image_center_button_menu' );
$menu_link = strtolower( str_replace(" ", "-", $button_label ) );

if( $image ){
  $image_url = $image[ 'url' ];
  $image_alt = $image[ 'alt' ];
  }

if( $button_link ){
  $link_url = $button_link[ 'url' ];
  $link_target = $button_link[ 'target' ] ? $button_link[ 'target' ] : '_self';
}

if( $button_file ){
  $link_url = $button_file[ 'url' ];
  $link_title = custom_file_title( $button_file[ 'title' ] );
}
?>
<section class="callout-img-center has-background-primary">
  <div class="container callout-wrapper">
    <div class="columns is-mobile is-multiline is-gapless is-vcentered">
      <div class="column is-full">
        <div class="container-sm content-wrapper pb-0">
          <?php if( $image ): ?>
            <div class="callout-image-wrapper" style="background:url(<?php echo esc_url( $image_url ); ?>) center / cover no-repeat;" role="img" aria-label="<?php echo esc_attr( $image_alt ); ?>"></div>
          <?php endif; ?>
          <?php if( $video ): ?>
            <div class="video-wrapper">
              <?php echo $video; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="column is-full">
        <div class="callout-content-wrapper">
          <div class="content-wrapper is-flex is-flex-direction-column is-align-items-center">
            <h2 class="is-family-secondary has-text-centered"><?php echo $title; ?></h2>
            <?php get_template_part( 'template-parts/border/separator' ); ?>
            <div class="has-text-centered-tablet">
              <?php echo $content; ?>
            </div>
            <?php if( $button_link ): ?>
              <div class="has-text-centered pt-3">
                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button is-light"><?php echo $button_label; ?></a> 
              </div>
            <?php endif; ?>
            <?php if( $button_file ): ?>
              <div class="has-text-centered pt-3">
                <a href="<?php echo esc_url( $link_url ); ?>" class="button is-light" title="<?php echo $link_title; ?>"><?php echo $button_label; ?></a>  
              </div>
            <?php endif; ?>
            <?php if( $button_menu ): ?>
              <div class="has-text-centered pt-3">
                <a href="#<?php echo $menu_link; ?>" class="button is-light show-modal-btn" id="showModal"><?php echo $button_label; ?></a> 
              </div>
            <?php endif; ?>
            <?php get_template_part( 'template-parts/section/sample-menu' ); ?>

          </div>
        </div>
      </div><!-- .column -->

    </div>
  </div>
</section><!-- .callout-img-center -->