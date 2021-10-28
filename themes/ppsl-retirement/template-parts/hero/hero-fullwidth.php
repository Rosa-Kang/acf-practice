<?php
/**
 * Template part for displaying hero - top.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$page_id = get_post_thumbnail_id( get_option( 'page' ) );
$page_hero_url = wp_get_attachment_url( $page_id );
$page_hero_alt = get_post_meta( $page_id, '_wp_attachment_image_alt', true );
?>
<div class="fixed-header"></div>
<section class="hero hero-fullwidth" style="background:url(<?php echo $page_hero_url; ?>) top center / cover no-repeat;" role="img" aria-label="<?php echo $page_hero_alt; ?>">
  <div class="hero-body has-text-centered w-100">
  </div>  
</section><!-- .hero-fullwidth -->