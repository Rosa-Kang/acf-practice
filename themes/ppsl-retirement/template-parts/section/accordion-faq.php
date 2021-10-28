<?php
/**
 * Template part for displaying accordion - faq.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<section class="faqs">
  <div class="accordion-container container-sm content-wrapper pt-0">
    <?php 
    $accordion_posts = get_field( 'accordion_posts' ); 

    if( $accordion_posts ): ?>
      <ul class="accordions">
        <?php
        $i = 0; 
        foreach ( $accordion_posts as $accordion_post ):  
          $title = get_the_title( $accordion_post->ID );
          $content = get_field( 'faq_content', $accordion_post->ID );
          $button_label = get_field( 'faq_button_label', $accordion_post->ID );
          $button_link = get_field( 'faq_button_link', $accordion_post->ID );

          if( $button_link ){
            $link_url = $button_link['url'];
            $link_target = $button_link['target'] ? $button_link['target'] : '_self';
          }

          $control = strtolower( preg_replace( "/[^A-Za-z0-9\-]/", "", str_replace( " ", "-", $title ) ) );
        ?>
          <li class="accordion py-3 px-4 mb-4 has-background-primary">
            <div class="accordion-header">
              <h3 class="mb-0">
                <button aria-expanded="true" class="accordion-control p-0" aria-controls="<?php echo $control; ?>" id="<?php echo $control . '-' . $i; ?>" aria-label="<?php echo $control; ?>">
                  <?php echo $title; ?>
                  <span class="accordion-icon-wrapper"><?php get_template_part( 'template-parts/icon/icon-plus' ); ?><?php get_template_part( 'template-parts/icon/icon-minus' ); ?></span> 
                </button>   
              </h3>
            </div>
            <div class="accordion-body" id="<?php echo $control; ?>" role="region" aria-labelledby="<?php echo $control . '-' . $i; ?>">
              <div class="accordion-content pt-3">
                <?php echo $content; ?>
                <?php if( $button_link ): ?>
                  <div class="has-text-centered">
                    <a class="button is-light" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $button_label; ?></a> 
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div><!-- .accordion-container -->
</section><!-- .faqs -->