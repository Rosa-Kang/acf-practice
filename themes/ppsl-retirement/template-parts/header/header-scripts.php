<?php
/**
 * Template part for displaying head elements such as Google Analytics.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$header_scripts = get_field('header_scripts', 'option'); 
?>
<?php if( $header_scripts ){ echo $header_scripts; } ?>