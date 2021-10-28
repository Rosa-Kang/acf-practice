<?php
/**
 * Template part for displaying cards - team members.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php 
$title = get_field( 'featured_posts_title' ); 
$subtitle = get_field( 'featured_posts_subtitle' ); 
$button_label = get_field( 'featured_posts_button_label' ); 
$featured_posts = get_field( 'featured_posts' );
?>
<section class="cards-team-members has-background-primary py-5">
  <div class="container content-wrapper">
    <?php if( $subtitle ): ?>
      <p class="subtitle has-text-centered mb-3"><?php echo $subtitle; ?></p>
    <?php endif; ?>
    <h2 class="mb-5 has-text-centered"><?php echo $title; ?></h2>
    <div class="has-text-centered mb-3">
      <?php get_template_part( 'template-parts/icon/icon-leaf-white' ); ?>
    </div>
    <?php 
    if( $featured_posts ): 
      $center_cards = '';

      if ( count($featured_posts) < 3 ){ $center_cards = "is-centered"; }
    ?>
      <div class="columns is-mobile is-multiline is-variable is-0-mobile is-3-tablet is-5-desktop is-6-widescreen is-7-fullhd <?php echo $center_cards; ?>">
        <?php 
        $i = 0;
        foreach ( $featured_posts as $featured_post ): 
          $name = get_the_title( $featured_post->ID );
          $link = strtolower( str_replace(" ", "-", $name ) );
          $job_title = get_field( 'team_member_title', $featured_post->ID );
          $content = get_post_field( 'post_content', $featured_post->ID );
          $image = wp_get_attachment_url( get_post_thumbnail_id( get_option( 'page', $featured_post->ID ) ) );
        ?>
          <div class="column is-full-mobile is-6-tablet is-4-desktop is-flex mb-3">
            <div class="card is-shadowless w-100 has-background-primary">  
              <div class="card-image">
                <figure class="image is-square mx-0 my-0">
                  <img src="<?php echo $image; ?>" alt="Profile image of <?php echo $name; ?>" class="no-lazyload">
                </figure>
              </div><!-- .card-image -->         
              <div class="card-content card-content-wrapper pt-0">
                <div class="content has-text-centered">
                  <h3 class="is-family-secondary mb-1"><?php echo $name; ?></h3>
                  <?php get_template_part( 'template-parts/border/separator' ); ?>
                  <a href="#<?php echo $link; ?>" class="button is-light show-modal-btn" id="showModal"><?php echo $button_label; ?></a>
                </div><!-- .content -->
              </div><!-- .card-content -->
            </div><!-- .card -->

            <div class="modal">
              <div class="modal-background"></div>
              <div class="modal-content-wrapper content-wrapper container-sm">
                <div class="modal-content mx-0">         
                  <div class="card has-background-light w-100">
                    <div class="card-image">
                      <figure class="image is-square mx-0 my-0">
                        <img src="<?php echo $image; ?>" alt="Profile image of <?php echo $name; ?>" class="no-lazyload">
                      </figure>
                    </div><!-- .card-image -->              
                    <div class="card-content px-5 pb-5">
                      <div class="media mb-1">
                        <div class="media-content">
                          <div class="name-wrapper mb-3 has-text-centered">
                            <h2 class="modal-title mb-3 has-text-primary is-family-secondary is-capitalized"><?php echo $name; ?></h2>
                            <?php get_template_part( 'template-parts/border/separator' ); ?>
                            <p class="has-text-primary subtitle mb-0"><?php echo $job_title; ?></p>
                          </div>
                        </div>
                      </div><!-- .media -->
                      <div class="content has-text-dark">
                        <?php echo $content; ?>                          
                      </div><!-- .content -->
                    </div><!-- .card-content -->
                  </div><!-- .card -->
                </div><!-- .modal-content -->
                <button class="modal-close is-large is-shadowless" aria-label="close" aria-label="Close Modal"></button>
              </div><!-- .modal-content-wrapper -->
            </div><!-- .modal -->

          </div><!-- .column -->
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section><!-- .cards-team-members -->