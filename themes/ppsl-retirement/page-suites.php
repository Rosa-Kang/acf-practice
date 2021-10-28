<?php
/**
 * Template Name: Suites Page
 * 
 * The template for displaying Your Suite page.
 *
 * @package White_Canvas_Design_Theme
 */
get_header(); ?> 

<?php get_template_part( 'template-parts/hero/hero' ); ?>
<?php get_template_part( 'template-parts/section/intro' ); ?>
<?php get_template_part( 'template-parts/callout/callout-img-center' ); ?>
<?php get_template_part( 'template-parts/callout/callout' ); ?>
<?php get_template_part( 'template-parts/card/cards-suites' ); ?>
<?php get_template_part( 'template-parts/callout/callout-img-right' ); ?>

<?php get_footer(); ?>