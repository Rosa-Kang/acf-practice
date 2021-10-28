<?php
/**
 * Template part for displaying the contact phone.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php 
$post_id = get_field( 'business_info_id', 'option' );
$phone = get_field( 'contact_phone_number', $post_id );
$clean_phone = clean( $phone );
?>
<p class="contact-phone">
  <a href="tel:<?php echo $clean_phone; ?>">
    <?php echo $phone; ?>
  </a>
</p>

