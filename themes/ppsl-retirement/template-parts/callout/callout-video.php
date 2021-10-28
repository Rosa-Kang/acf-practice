<?php
/**
 * Template part for displaying callout with video.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$title = get_field( 'callout_video_title' );
$content = get_field( 'callout_video_content' );
$video = get_field( 'callout_video' );
$button_label = get_field( 'callout_video_button_label' );
$button_link = get_field( 'callout_video_button_link' );

if( $button_link ){
  $link_url = $button_link['url'];
  $link_target = $button_link['target'] ? $button_link['target'] : '_self';
}
?>
<?php if( $video ): ?>
  <section class="callout-video has-background-info-light">
    <div class="columns is-tablet is-multiline is-gapless is-vcentered">
      <div class="column is-full-tablet is-5-desktop is-4-widescreen">
        <div class="content-wrapper">
          <div class="video-wrapper">
            <?php echo $video; ?>
          </div>
        </div>
      </div>
      <div class="column is-full-tablet is-7-desktop is-8-widescreen">
        <div class="content-wrapper">
          <div class="callout-content callout-pl">
            <h2 class="my-0"><?php echo $title; ?></h2>
            <?php get_template_part( 'template-parts/border/separator' ); ?>
            <p><?php echo $content; ?></p>
            <?php if( $button_link ): ?>
              <div class="pt-3">
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button is-primary"><?php echo $button_label; ?></a> 
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section><!-- .callout-video -->
<?php endif; ?>