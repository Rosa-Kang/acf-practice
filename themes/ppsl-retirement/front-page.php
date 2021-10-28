<?php
/**
 * The main template file.
 *
 * @package White_Canvas_Design_Theme
 */
get_header(); ?> 

<?php get_template_part( 'template-parts/hero/hero' ); ?>
<?php get_template_part( 'template-parts/section/intro' ); ?>
<?php get_template_part( 'template-parts/callout/callout-video' ); ?>
<?php get_template_part( 'template-parts/callout/callout-img-left' ); ?>
<?php get_template_part( 'template-parts/section/features' ); ?>
<?php get_template_part( 'template-parts/callout/callout-img-center' ); ?>
<?php get_template_part( 'template-parts/callout/callout-img-right' ); ?>

<?php get_footer(); ?>