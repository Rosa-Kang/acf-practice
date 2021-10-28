<?php
/**
 * Template Name: Lifestyle Page
 * 
 * The template for displaying Lifestyle page.
 *
 * @package White_Canvas_Design_Theme
 */
get_header(); ?> 

<?php get_template_part( 'template-parts/hero/hero' ); ?>
<?php get_template_part( 'template-parts/section/intro' ); ?>
<?php get_template_part( 'template-parts/callout/callout-img-left' ); ?>
<?php get_template_part( 'template-parts/callout/callout' ); ?>
<?php get_template_part( 'template-parts/section/features' ); ?>
<?php get_template_part( 'template-parts/callout/callout-img-right' ); ?>

<?php get_footer(); ?>