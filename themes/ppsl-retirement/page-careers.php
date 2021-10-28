<?php
/**
 * Template Name: Careers Page
 * 
 * The template for displaying Careers page.
 *
 * @package White_Canvas_Design_Theme
 */
get_header(); ?> 

<?php get_template_part( 'template-parts/hero/hero' ); ?>
<div class="background-wrapper">
  <?php get_template_part( 'template-parts/section/intro' ); ?>
  <?php get_template_part( 'template-parts/section/accordion-jobs' ); ?>
  <?php get_template_part( 'template-parts/contact/form-2' ); ?>
  <?php get_template_part( 'template-parts/section/more-info' ); ?>
</div>

<?php get_footer(); ?>