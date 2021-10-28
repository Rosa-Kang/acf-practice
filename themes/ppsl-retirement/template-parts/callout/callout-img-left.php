<?php

/**
 * Template part for displaying callout image - left.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$image = get_field('callout_image_left');
$title = get_field('callout_image_left_title');
$subtitle = get_field('callout_image_left_subtitle');
$content = get_field('callout_image_left_content');
$button_label = get_field('callout_image_left_button_label');
$button_link = get_field('callout_image_left_button_link');

if ($image) {
  $image_url = $image['url'];
  $image_alt = $image['alt'];
}

if ($button_link) {
  $link_url = $button_link['url'];
  $link_target = $button_link['target'] ? $button_link['target'] : '_self';
}

if ($title && $content && $image) :
?>
<section class="callout-img-left has-background-info-light">
  <div class="columns is-tablet is-multiline is-gapless">
    <div class="column is-full-touch is-5-desktop is-4-widescreen">
      <div class="callout-image-wrapper"
        style="background:url(<?php echo esc_url($image_url); ?>) top center / cover no-repeat;" role="img"
        aria-label="<?php echo esc_attr($image_alt); ?>"></div>
    </div>
    <div class="column is-full-mobile is-7-desktop is-8-widescreen">
      <div class="container content-wrapper">
        <div class="callout-content callout-pl py-5">
          <?php if ($subtitle) : ?>
          <p class="subtitle has-text-centered mb-3"><?php echo $subtitle; ?></p>
          <?php endif; ?>
          <h2 class="my-0"><?php echo $title; ?></h2>
          <?php get_template_part('template-parts/border/separator'); ?>
          <?php if ($content) : ?>
          <p><?php echo $content; ?></p>
          <?php endif; ?>
          <?php if ($button_link) : ?>
          <div class="pt-3">
            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
              class="button is-primary"><?php echo $button_label; ?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- .callout-img-left -->
<?php endif; ?>