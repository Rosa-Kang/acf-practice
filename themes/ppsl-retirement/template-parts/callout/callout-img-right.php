<?php
/**
 * Template part for displaying callout image - right.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$image = get_field( 'callout_image_right' ); 
$title = get_field( 'callout_image_right_title' );
$subtitle = get_field( 'callout_image_right_subtitle' );
$content = get_field( 'callout_image_right_content' );
$testimonials = get_field( 'callout_image_right_testimonial' );
$button_label = get_field( 'callout_image_right_button_label' );
$button_link = get_field( 'callout_image_right_button_link' );
$bg = "";

if( $image ){
  $image_url = $image[ 'url' ];
  $image_alt = $image[ 'alt' ];
}

if( $button_link ){
  $link_url = $button_link[ 'url' ];
  $link_target = $button_link[ 'target' ] ? $button_link[ 'target' ] : '_self';
}

if( !is_page_template( 'page-lifestyle.php' ) ){
  $bg = "has-background-info-light";
} else {
  $bg = "has-background-primary";
}
?>
<?php if( $content || $testimonials ): ?>
<section class="callout-img-right <?php echo $bg; ?>">
  <div class="columns is-tablet is-multiline is-gapless">
    <div class="column is-full-touch is-5-desktop is-4-widescreen">
      <div class="callout-image-wrapper" style="background:url(<?php echo esc_url( $image_url ); ?>) top center / cover no-repeat;" role="img" aria-label="<?php echo esc_attr( $image_alt ); ?>"></div>
    </div>
    <div class="column is-full-mobile is-7-desktop is-8-widescreen">
      <div class="container content-wrapper">
        <div class="callout-content callout-pl py-5">
          <?php if( $subtitle ): ?>
            <p class="subtitle mb-3"><?php echo $subtitle; ?></p>
          <?php endif; ?>
          <h2 class="my-0"><?php echo $title; ?></h2>
          <?php get_template_part( 'template-parts/border/separator' ); ?>
          <?php if( $content ): ?>
            <p><?php echo $content; ?></p>
          <?php endif; ?> 
          <?php if( $testimonials ):
            foreach( $testimonials as $testimonial ):
              $name = get_the_title( $testimonial->ID );
              $quote = get_field( "testimonial_content", $testimonial->ID );
          ?>
            <p class="has-text-primary">&#8220;<?php echo $quote; ?>&#8221;</p>
            <p class="citation mb-0"><?php echo $name; ?></p>
          <?php endforeach; endif; ?>
          <?php if( $button_link ): ?>
            <div class="pt-3">
              <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button is-primary"><?php echo $button_label; ?></a> 
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- .callout-img-right -->
<?php endif; ?>