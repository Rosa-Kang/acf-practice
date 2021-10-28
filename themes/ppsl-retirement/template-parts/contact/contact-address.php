<?php
/**
 * Template part for displaying the contact address.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php 
$post_id = get_field('business_info_id', 'option');
$address = get_field('social_address', $post_id);
?>
<p class="contact-address"><?php echo $address; ?></p>

