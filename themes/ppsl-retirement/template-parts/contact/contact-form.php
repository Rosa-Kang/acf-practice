<?php
/**
 * Template part for displaying contact form.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$title = get_field( 'contact_form_title' );
$subtitle = get_field( 'contact_form_subtitle' );
$content = get_field( 'contact_form_content' );
$form = get_field( 'contact_form_shortcode' );

$post_id = get_field( 'business_info_id', 'option'); 
$street_address = get_field( 'street_address', $post_id );
$city = get_field( 'city', $post_id );
$province = get_field( 'province', $post_id );
$postal_code = get_field( 'postal_code', $post_id );
$address_link = get_field( 'address_link', $post_id );
$embed_map = get_field( 'google_maps_embed_link', $post_id );
$phone = get_field( 'contact_phone_number', $post_id );
$email = get_field( 'contact_email', $post_id );
$facebook = get_field( 'facebook_url', $post_id );
$facebook_content = get_field( 'facebook_contact_content', $post_id );
?>
<section class="contact-form py-5">
  <div class="container-sm content-wrapper pb-0">
    <?php if( $subtitle ): ?>
      <p class="subtitle has-text-centered mb-3"><?php echo $subtitle; ?></p>
    <?php endif; ?>  
    <?php if( $title ): ?>
      <h2 class="mb-5 has-text-centered"><?php echo $title; ?></h2>
    <?php endif; ?>
    <div class="has-text-centered mb-3">
      <?php get_template_part( 'template-parts/icon/icon-leaf-primary' ); ?>
    </div>
    <?php if( $content ): ?>
      <p><?php echo $content; ?></p>
    <?php endif; ?>
  </div>
  <div class="container content-wrapper">
    <div class="columns is-tablet is-multiline is-variable is-0-mobile is-3-tablet">
      <div class="column is-full-mobile is-6-tablet">
        <?php echo do_shortcode( $form ); ?>
      </div>
      <div class="column is-full-mobile is-6-tablet">
        <ul class="list-style-none">
          <li><a href="<?php echo esc_url( $address_link ); ?>"  target="_blank" rel="noopener noreferrer" class="is-flex"><div class="scaling-svg-container"><?php get_template_part( 'template-parts/icon/icon-pin' ); ?></div><?php echo $street_address . ', ' . $city . ', ' . $province . ', ' . $postal_code; ?></a></li>
          <li><a href="tel:<?php echo $phone; ?>" class="is-flex"><div class="scaling-svg-container"><?php get_template_part( 'template-parts/icon/icon-phone' ); ?></div><?php echo $phone; ?></a></li>
          <li><a href="mailto:<?php echo $email; ?>" class="is-flex"><div class="scaling-svg-container"><?php get_template_part( 'template-parts/icon/icon-email' ); ?></div><?php echo $email; ?></a></li>
          <li><a href="<?php echo esc_url( $facebook ); ?>" class="is-flex"><div class="scaling-svg-container"><?php get_template_part( 'template-parts/icon/icon-facebook' ); ?></div><?php echo $facebook_content; ?></a></li>
        </ul>
        <div class="contact-map-wrapper">
          <?php echo $embed_map; ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- .contact-form -->
