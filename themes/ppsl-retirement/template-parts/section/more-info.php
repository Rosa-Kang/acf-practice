<?php
/**
 * Template part for displaying more info.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php 
$title = get_field( 'more_info_title' );
$button_label = get_field( 'more_info_button_label' );
$button_link = get_field( 'more_info_button_link' );

if( $button_link ){
  $link_url = $button_link[ 'url' ];
  $link_target = $button_link[ 'target' ] ? $button_link[ 'target' ] : '_self';
}
?>
<section class="more-info pb-5">
  <div class="container content-wrapper has-text-centered pt-0">
    <div class="container-sm">
      <h2 class="mb-5 is-family-secondary"><?php echo $title; ?></h2>
      <?php if( $button_link ): ?>
        <div class="has-text-centered pt-3">
          <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button is-info"><?php echo $button_label; ?></a> 
        </div>
      <?php endif; ?>
    </div>
  </div>
</section><!-- .more-info -->