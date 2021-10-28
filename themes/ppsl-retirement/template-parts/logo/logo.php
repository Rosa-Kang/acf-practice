<?php
/**
 * Template part for displaying logo.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$post_id = get_field( 'business_info_id', 'option' ); 
$logo = get_field( 'main_logo', $post_id ); 

if( $logo ){
  $logo_url = $logo["url"];
  $logo_alt = $logo["alt"];
}
?>
<a href="<?php echo esc_url( home_url() ); ?>" class="main-logo-wrapper">
  <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt; ?>" class="no-lazyload">
</a>


