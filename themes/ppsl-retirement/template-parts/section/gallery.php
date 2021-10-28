<?php
/**
 * Template part for displaying gallery.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php $gallery_images = $args['gallery']; ?>
<section class="gallery-thumbnails m-auto">
  <div class="container content-wrapper h-100 pb-0">

    <div class="swiper-container gallery-top js-slider--main">
      <ul class="swiper-wrapper list-style-none">
        <?php
          if( $gallery_images ): 
            foreach( $gallery_images as $gallery_image ): 
              $image_url = $gallery_image['url'];
              $image_alt = $gallery_image['alt'];
        ?>
          <li class="swiper-slide" style="background-image:url(<?php echo esc_url( $image_url ); ?>)" role="img" aria-label="<?php echo esc_attr( $image_alt ); ?>"></li>
        <?php endforeach; endif; ?>

      </ul>
    </div>

    <div class="swiper-container gallery-thumbs js-slider--nav">
      <ul class="swiper-wrapper">
        <?php 
          if( $gallery_images ): 
            foreach( $gallery_images as $gallery_image ): 
              $image_url = $gallery_image['url'];
              $image_alt = $gallery_image['alt'];
        ?>
          <li class="swiper-slide no-lazyload" style="background-image:url(<?php echo esc_url( $image_url ); ?>)" role="img" aria-label="<?php echo esc_attr( $image_alt ); ?>"></li>
        <?php endforeach; endif; ?>
      </ul>
      <!-- Add Navigation Arrows -->
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
    </div>

  </div>
</section><!-- .gallery -->