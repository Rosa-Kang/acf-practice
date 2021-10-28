<?php
/**
 * Template part for displaying form.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$title = get_field( 'form_title' );
$subtitle = get_field( 'form_subtitle' );
$content = get_field( 'form_content' );
$form = get_field( 'form_shortcode' );
?>
<section class="additional-form py-5">
  <div class="container-sm content-wrapper">  
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
      <?php echo $content; ?>
    <?php endif; ?>
    <?php echo do_shortcode( $form ); ?>
  </div>
</section><!-- .additional-form -->
