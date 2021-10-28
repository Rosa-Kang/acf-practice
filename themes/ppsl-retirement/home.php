<?php
/**
 * The home template file.
 *
 * @package White_Canvas_Design_Theme
 */

get_header(); ?>

<?php 
$news_id = get_field( 'news_id', 'option' ); 
$title = get_field( 'intro_title', $news_id );
$subtitle = get_field( 'intro_subtitle', $news_id );
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php get_template_part( 'template-parts/hero/hero' ); ?>

      <?php if ( have_posts() ) : ?>

        <section class="blog-container pt-5">
          <div class="container content-wrapper pb-0">
            <?php if( $subtitle ): ?>
              <p class="subtitle has-text-centered mb-3"><?php echo $subtitle; ?></p>
            <?php endif; ?>
            <h2 class="mb-5 has-text-centered"><?php echo $title; ?></h2>
            <div class="has-text-centered mb-3">
              <?php get_template_part( 'template-parts/icon/icon-leaf-primary' ); ?>
            </div>
          </div>
          <div class="image-info-cards">
            <div class="container content-wrapper pt-0">
              <div class="columns is-tablet is-multiline is-centered is-variable is-6-desktop is-8-fullhd">
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part( 'template-parts/content/content' ); ?>

                <?php endwhile; ?>
              </div>
            </div>
          </div>

          <?php get_template_part( 'template-parts/button/button-show-more' ); ?>
        </section>

      <?php else : ?>

        <?php get_template_part( 'template-parts/content/content', 'none' ); ?>

      <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
