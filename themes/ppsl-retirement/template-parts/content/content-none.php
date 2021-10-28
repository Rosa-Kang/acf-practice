<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html( 'Nothing Found' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() ) : ?>

      <p class="has-text-centered my-6">No news posted at this time, please check back soon.</p>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
