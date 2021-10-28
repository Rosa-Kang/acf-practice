<?php
/**
 * Template part for displaying features.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php 
$title = get_field( 'features_title' );
$subtitle = get_field( 'features_subtitle' );
$content = get_field( 'features_content' );
$button_label = get_field( 'features_button_label' );
$button_link = get_field( 'features_button_link' );

if( $button_link ){
  $link_url = $button_link['url'];
  $link_target = $button_link['target'] ? $button_link['target'] : '_self';
}

$bg = "";
$text_color = "";

if( !is_front_page() ){ 
  $bg = 'has-background-info-light'; 
  $bg_item = 'has-background-light';
} else {
  $bg = 'has-background-light'; 
  $bg_item = 'has-background-info-light';
}

if( is_page_template('page-suites.php') ){ 
  $text_color = 'has-text-light'; 
}
?>
<section class="features <?php echo $bg; ?> pt-5">
  <div class="container-m content-wrapper has-text-centered">
    <p class="subtitle"><?php echo $subtitle; ?></p>
    <h2 class="mb-5"><?php echo $title; ?></h2>
    <div class="mb-5">
      <?php get_template_part( 'template-parts/icon/icon-leaf-primary' ); ?>
    </div>
    <?php if( $content ): ?>
      <p class="pb-2 mb-5"><?php echo $content; ?></p>
    <?php endif; ?>
    <div class="columns is-mobile is-multiline is-gapless">
      <?php if( have_rows( 'features' ) ): ?>
        <?php while( have_rows( 'features' ) ): the_row(); 
        $info = get_sub_field( 'feature_info' );
        $more_info = get_sub_field( 'feature_more_info' );
        $image = get_sub_field( 'feature_icon' );

        if( $image ){
        $image_url = $image['url'];
        $image_alt = $image['alt'];
        }
        ?>
          <div class="column is-full-mobile is-4-tablet">
            <div class="feature-wrapper <?php echo $bg_item; ?>  is-flex is-justify-content-center is-align-items-center">
              <figure class="image">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
              </figure>
              <div class="is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
                <p class="mb-0"><?php echo $info; ?></p>
                <p class="mb-0 is-family-primary is-size-7 has-text-primary"><?php echo $more_info; ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php if( $button_link ): ?>
      <div class="has-text-centered mt-5">
        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button is-info"><?php echo $button_label; ?></a> 
      </div>
    <?php endif; ?>
  </div>
</section><!-- .features -->