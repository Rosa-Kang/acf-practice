<?php
/**
 * Template part for displaying logo alternative.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$post_id = get_field('business_info_id', 'option'); 
$logo_alt = get_field('main_logo_alt', $post_id); 
?>
<a href="<?php echo esc_url( home_url() ); ?>" class="logo-alt-wrapper">
  <img src="<?php echo $logo_alt['url']; ?>" alt="<?php echo $logo_alt['alt']; ?>" class="no-lazyload">
</a>
