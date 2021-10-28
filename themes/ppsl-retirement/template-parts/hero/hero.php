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

$news_id = get_field( 'news_id', 'option' ); 
$news_hero_url = wp_get_attachment_url( get_post_thumbnail_id(  $news_id ) );
$news_hero_alt = get_post_meta( $news_id, '_wp_attachment_image_alt', true ); 

$title = "";
$subtitle = "";
$image_position = "";

if( is_home() && ! is_front_page() ){
  $title = get_field( 'hero_title', $news_id) ;
  $subtitle = get_field( 'hero_subtitle', $news_id );
  $image_position =  get_field( 'hero_image_position', $news_id );
} else {
  $title = get_field( 'hero_title' );
  $subtitle = get_field( 'hero_subtitle' );
  $image_position = get_field( 'hero_image_position' );
};
?>
<div class="fixed-header"></div>
<section class="hero hero-text-image" style="background:url(<?php if( is_home() && ! is_front_page() ){ echo $news_hero_url; } else { echo $page_hero_url; } ?>) top <?php echo $image_position; ?> / cover no-repeat;" role="img" aria-label="<?php if( is_home() && ! is_front_page() ){ echo $news_hero_alt; } else { echo $page_hero_alt; } ?>">
  <div class="hero-body has-text-centered w-100">
    <div class="hero-content-container container is-flex">
      <div class="columns is-mobile is-multiline is-gapless w-100">
        <div class="column is-half-tablet"></div>
        <div class="column is-full-mobile-only is-half-tablet">
          <div class="hero-content px-5 py-5">
            <p class="has-text-light subtitle mb-3"><?php echo $subtitle; ?></p>
            <h1 class="mt-0 mb-4"><?php echo $title; ?></h1>
            <?php get_template_part( 'template-parts/icon/icon-leaf-white' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section><!-- .hero-text-image -->