<?php
/**
 * Template part for displaying intro.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php 
$title = get_field( 'intro_title' );
$subtitle = get_field( 'intro_subtitle' );
$content = get_field( 'intro_content' );
$button_label = get_field( 'intro_button_label' );
$button_link = get_field( 'intro_button_link' );
$button_file = get_field( 'intro_button_file' );
$section_button_label = get_field( 'section_button_label' );
$section_button_link = strtolower( str_replace(" ", "-", $section_button_label ) );

if( $button_link ){
  $link_url = $button_link[ 'url' ];
  $link_target = $button_link[ 'target' ] ? $button_link[ 'target' ] : '_self';
}

if( $button_file ){
  $link_url = $button_file[ 'url' ];
  $link_title = custom_file_title( $button_file[ 'title' ] );
}
?>
<section class="intro py-5">
  <div class="container content-wrapper">
    <?php if( $subtitle ): ?>
      <p class="subtitle has-text-centered mb-3"><?php echo $subtitle; ?></p>
    <?php endif; ?>
    <h2 class="mb-5 has-text-centered"><?php echo $title; ?></h2>
    <div class="container-sm">
      <div class="has-text-centered mb-3">
        <?php get_template_part( 'template-parts/icon/icon-leaf-primary' ); ?>
      </div>
      <p><?php echo $content; ?></p>
      <?php if( $button_link ): ?>
        <div class="buttons-wrapper">
          <div class="has-text-centered pt-3">
            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button is-info"><?php echo $button_label; ?></a> 
          </div>
          <?php if( $section_button_label ): ?>
            <div class="has-text-centered pt-3">
              <a href="#<?php echo $section_button_link; ?>" class="button is-info"><?php echo $section_button_label; ?></a> 
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php if( $button_file ): ?>
        <div class="has-text-centered pt-3">
          <a href="<?php echo esc_url( $link_url ); ?>" class="button is-info" title="<?php echo $link_title; ?>"><?php echo $button_label; ?></a>  
        </div>
      <?php endif; ?>
    </div>
  </div>
</section><!-- .intro -->