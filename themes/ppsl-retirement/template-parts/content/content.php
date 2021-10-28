<?php
/**
 * Template part for displaying posts.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php  
$image = wp_get_attachment_url( get_post_thumbnail_id( get_option( 'page' ) ) );
$image_id = get_post_thumbnail_id( get_the_ID() );
$image_alt = get_post_meta( $image_id , '_wp_attachment_image_alt', true );
$title = get_the_title();
$content = custom_excerpt( 30 );
$date = get_the_date( 'F j, Y' ); 
?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('column is-full is-6-tablet is-4-desktop mt-5'); ?>>
    <div class="card is-shadowless w-100">
      <div class="card-image pb-0">
        <figure class="image is-3by2 mx-0 my-0">
          <img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
        </figure>
      </div>
      <div class="card-content has-text-centered px-0">
        <div class="content">
          <h3 class="subtitle mb-0"><?php echo $title; ?></h3>
          <p class="has-text-info mb-0 is-uppercase"><?php echo $date; ?></p>
          <?php get_template_part('template-parts/section/separator'); ?>

          <p class="mb-0 mt-3 has-text-left"><?php echo $content; ?></p>
        </div>

        <div class="mt-3">
          <a href="<?php echo get_permalink(); ?>" class="button is-info">learn more</a>
        </div>

      </div>
    </div>
  </article><!-- #post-## -->
