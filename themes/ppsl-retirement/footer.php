<?php
/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Design_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer has-background-primary" role="contentinfo">
				<div class="footer-wrapper container content-wrapper">
          <?php 
          $post_id = get_field( 'business_info_id', 'option' );
          $email = get_field( 'contact_email', $post_id );
          $phone = get_field( 'contact_phone_number', $post_id );
          $street_address = get_field( 'street_address', $post_id );
          $city = get_field( 'city', $post_id );
          $province = get_field( 'province', $post_id );
          $postal_code = get_field( 'postal_code', $post_id );
          $map = get_field( 'address_link', $post_id );
          ?>

          <div class="footer-contact-wrapper">
            <div class="is-hidden-tablet">
              <ul class="has-text-weight-medium is-flex is-flex-direction-column is-align-items-center">
                <li><a href="tel:<?php echo $phone; ?>" class="footer-text"><?php echo $phone; ?></a></li>
                <li><a href="<?php echo esc_url( $map ); ?>" class="footer-text"><?php echo $street_address . ', ' . $city . ', ' . $province . ', ' . $postal_code; ?></a></li>
                <li class="is-flex is-align-items-center mt-1">
                  <a href="mailto:<?php echo $email; ?>"  class="footer-text"><?php echo $email; ?></a><span class="mr-5"></span>
                  <?php get_template_part( 'template-parts/icon/icons-social' ); ?>
                </li>
              </ul>
            </div>
            <div class="is-hidden-mobile">
              <ul class="has-text-weight-medium is-flex is-align-items-center is-flex-direction-column">
                <li><a href="<?php echo esc_url( $map ); ?>" class="footer-text"><?php echo $street_address . ', ' . $city . ', ' . $province . ', ' . $postal_code; ?></a></li>
                <li class="is-flex is-align-items-center mt-1">
                  <a href="tel:<?php echo $phone; ?>" class="footer-text"><?php echo $phone; ?></a><span class="has-text-light has-text-weight-semibold">&nbsp;|&nbsp;</span><a href="mailto:<?php echo $email; ?>"  class="footer-text"><?php echo $email; ?></a><span class="mr-5"></span>
                  <?php get_template_part( 'template-parts/icon/icons-social' ); ?>
                </li>
              </ul>
            </div>
          </div>

          <div class="privacy-terms-wrapper my-5 is-flex is-align-items-center">
            <?php wp_nav_menu( array( 'menu' => 'Privacy Policy' ) ); ?>
          </div>

          <div class="copyright-wrapper">
            <p class="footer-text">Copyright Park Place Seniors Living <?php echo date('Y'); ?>.<span class="is-hidden-tablet"></br></span><span class="is-hidden-mobile">&nbsp;</span>Website design by <a href="https://whitecanvasdesign.ca" target="_blank" rel="noopener noreferrer">White Canvas Design.</a></p>
          </div>

        </div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

    <?php wp_footer(); ?>
    <?php get_template_part( 'template-parts/footer/footer-scripts' ); ?>

	</body>
</html>
