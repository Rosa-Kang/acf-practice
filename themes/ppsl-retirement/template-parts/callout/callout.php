<?php
/**
 * Template part for displaying callout with image.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$image = get_field( 'callout_image' ); 
$title = get_field( 'callout_title' );
$subtitle = get_field( 'callout_subtitle' );
$intro_content = get_field( 'callout_intro_content' );
$content = get_field( 'callout_content' );
$button_label = get_field( 'callout_button_label' );
$button_link = get_field( 'callout_button_link' );
$button_file = get_field( 'callout_button_file' );

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
<section class="callout">
  <div class="container callout-wrapper">
    <?php if( $subtitle ): ?>
      <p class="subtitle has-text-centered mb-3"><?php echo $subtitle; ?></p>
    <?php endif; ?>
    <h2 class="mb-5 has-text-centered"><?php echo $title; ?></h2>
    <div class="has-text-centered mb-5">
      <?php get_template_part( 'template-parts/icon/icon-leaf-primary' ); ?>
    </div>
    <?php if( $intro_content ): ?>
      <div class="container-sm content-wrapper py-0">
        <p class="mb-6"><?php echo $intro_content; ?></p>
      </div>
    <?php endif; ?>
    <div class="columns is-mobile is-multiline is-gapless is-vcentered has-background-primary">
      <div class="column is-full-touch is-5-desktop">
        <div class="container content-wrapper">
          <div class="callout-image-wrapper" style="background:url(<?php echo esc_url( $image_url ); ?>) top center / cover no-repeat;" role="img" aria-label="<?php echo esc_attr( $image_alt ); ?>">
          </div>
        </div>
      </div>
      <div class="column is-full-touch is-7-desktop">
        <div class="content-wrapper">
          <div class="callout-content callout-pl is-flex is-flex-direction-column is-justify-content-center">
            <?php echo $content; ?>
          </div>
        </div>
      </div>
    </div>
    <?php if( $button_link ): ?>
      <div class="has-text-centered mt-6">
        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button is-info"><?php echo $button_label; ?></a> 
      </div>
    <?php endif; ?>
  </div>
</section><!-- .callout -->