
<?php
/**
 * Template part for displaying sample menu.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php 
$title = get_field( 'sample_menu_title' );
$sample_menu = get_field( 'sample_menu' );
?>
<div class="sample-menu">
  <div class="modal">
    <div class="modal-background"></div>
    <div class="modal-content-wrapper content-wrapper container-sm">
      <div class="modal-content mx-0">         
        <div class="card has-background-light w-100">             
          <div class="card-content px-5 pb-5">
            <div class="media mb-1">
              <div class="media-content">
                <div class="name-wrapper mb-3 has-text-centered">
                  <h2 class="modal-title mb-3 has-text-primary is-family-secondary is-capitalized"><?php echo $title; ?></h2>
                  <?php get_template_part( 'template-parts/border/separator' ); ?>
                </div>
              </div>
            </div><!-- .media -->
            <div class="content">
              <?php
              if( $sample_menu ) {
                echo '<ul class="list-style-none">';
                foreach( $sample_menu as $meal ) {
                    $title = $meal['title'];
                    $content = $meal['content'];
                    echo '<li>';
                    echo '<p class="subtitle has-text-primary has-text-centered">' . $title . '</p>';
                    echo '<p class="has-text-dark has-text-centered mb-5">' . $content . '</p>';
                    echo '</li>';
                }
                echo '</ul>';
              }
              ?>                          
            </div><!-- .content -->
          </div><!-- .card-content -->
        </div><!-- .card -->
      </div><!-- .modal-content -->
      <button class="modal-close is-large is-shadowless" aria-label="close" aria-label="Close Modal"></button>
    </div><!-- .modal-content-wrapper -->
  </div><!-- .modal -->
</div>