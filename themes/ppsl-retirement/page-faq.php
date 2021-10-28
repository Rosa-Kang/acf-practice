<?php
/**
 * Template Name: FAQ Page
 * 
 * The template for displaying FAQ page.
 *
 * @package White_Canvas_Design_Theme
 */
get_header(); ?> 

<?php get_template_part( 'template-parts/hero/hero' ); ?>
<div class="background-wrapper">
  <?php get_template_part( 'template-parts/section/intro' ); ?>
  <?php get_template_part( 'template-parts/section/accordion-faq' ); ?>
  <?php get_template_part( 'template-parts/section/more-info' ); ?>
</div>

<?php get_footer(); ?>