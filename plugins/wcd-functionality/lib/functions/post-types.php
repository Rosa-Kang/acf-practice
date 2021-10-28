<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Jobs Post Type
function wcd_jobs() {

    $labels = array(
        'name'                  => 'Jobs',
        'singular_name'         => 'Job',
        'menu_name'             => 'Jobs',
        'name_admin_bar'        => 'Job',
        'archives'              => 'Job Archives',
        'attributes'            => 'Job Attributes',
        'parent_item_colon'     => 'Parent Job:',
        'all_items'             => 'All Jobs',
        'add_new_item'          => 'Add New Job',
        'add_new'               => 'Add New',
        'new_item'              => 'New Job',
        'edit_item'             => 'Edit Job',
        'update_item'           => 'Update Job',
        'view_item'             => 'View Job',
        'view_items'            => 'View Jobs',
        'search_items'          => 'Search Job',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Job',
        'uploaded_to_this_item' => 'Uploaded to this Job',
        'items_list'            => 'Jobs list',
        'items_list_navigation' => 'Jobs list navigation',
        'filter_items_list'     => 'Filter Jobs List',
    );
    $args = array(
        'label'                 => 'Job',
        'description'           => 'Jobs',
        'labels'                => $labels,
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-id-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'jobs', $args );

}
add_action( 'init', 'wcd_jobs', 0 );

// Register Team Post Type
function wcd_team() {

  $labels = array(
      'name'                  => 'Team Members',
      'singular_name'         => 'Team Member',
      'menu_name'             => 'Team Members',
      'name_admin_bar'        => 'Team Member',
      'archives'              => 'Team Member Archives',
      'attributes'            => 'Team Member Attributes',
      'parent_item_colon'     => 'Parent Team Member:',
      'all_items'             => 'All Team Members',
      'add_new_item'          => 'Add New Team Member',
      'add_new'               => 'Add New',
      'new_item'              => 'New Team Member',
      'edit_item'             => 'Edit Team Member',
      'update_item'           => 'Update Team Member',
      'view_item'             => 'View Team Member',
      'view_items'            => 'View Team Members',
      'search_items'          => 'Search Team Members',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Team Member',
      'uploaded_to_this_item' => 'Uploaded to this Team Member',
      'items_list'            => 'Team Members list',
      'items_list_navigation' => 'Team Members list navigation',
      'filter_items_list'     => 'Filter Team Members List',
  );
  $args = array(
      'label'                 => 'Team Member',
      'description'           => 'Team Members',
      'labels'                => $labels,
      'show_in_rest'          => true,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-groups',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
  );
  register_post_type( 'team_members', $args );

}
add_action( 'init', 'wcd_team', 0 );

// Register FAQ Post Type
function wcd_faqs() {

  $labels = array(
      'name'                  => 'FAQs',
      'singular_name'         => 'FAQ',
      'menu_name'             => 'FAQs',
      'name_admin_bar'        => 'FAQ',
      'archives'              => 'FAQ Archives',
      'attributes'            => 'FAQ Attributes',
      'parent_item_colon'     => 'Parent FAQ:',
      'all_items'             => 'All FAQs',
      'add_new_item'          => 'Add New FAQ',
      'add_new'               => 'Add New',
      'new_item'              => 'New FAQ',
      'edit_item'             => 'Edit FAQ',
      'update_item'           => 'Update FAQ',
      'view_item'             => 'View FAQ',
      'view_items'            => 'View FAQs',
      'search_items'          => 'Search FAQs',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into FAQ',
      'uploaded_to_this_item' => 'Uploaded to this FAQ',
      'items_list'            => 'FAQs list',
      'items_list_navigation' => 'FAQs list navigation',
      'filter_items_list'     => 'Filter FAQs List',
  );
  $args = array(
      'label'                 => 'FAQ',
      'description'           => 'FAQs',
      'labels'                => $labels,
      'show_in_rest'          => true,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-info-outline',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
  );
  register_post_type( 'faqs', $args );

}
add_action( 'init', 'wcd_faqs', 0 );
    
// Register Suites Post Type
function wcd_suites() {

  $labels = array(
      'name'                  => 'Suites',
      'singular_name'         => 'Suite',
      'menu_name'             => 'Suites',
      'name_admin_bar'        => 'Suite',
      'archives'              => 'Suite Archives',
      'attributes'            => 'Suite Attributes',
      'parent_item_colon'     => 'Parent Suite:',
      'all_items'             => 'All Suites',
      'add_new_item'          => 'Add New Suite',
      'add_new'               => 'Add New',
      'new_item'              => 'New Suite',
      'edit_item'             => 'Edit Suite',
      'update_item'           => 'Update Suite',
      'view_item'             => 'View Suite',
      'view_items'            => 'View Suites',
      'search_items'          => 'Search Suites',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Suite',
      'uploaded_to_this_item' => 'Uploaded to this Suite',
      'items_list'            => 'Suites list',
      'items_list_navigation' => 'Suites list navigation',
      'filter_items_list'     => 'Filter Suites List',
  );
  $args = array(
      'label'                 => 'Suite',
      'description'           => 'Suites',
      'labels'                => $labels,
      'show_in_rest'          => true,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-palmtree',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
  );
  register_post_type( 'suites', $args );

}
add_action( 'init', 'wcd_suites', 0 );

// Register Testimonials Post Type
function wcd_testimonials_post_type() {

    $labels = array(
        'name'                  => 'Testimonials',
        'singular_name'         => 'Testimonial',
        'menu_name'             => 'Testimonials',
        'name_admin_bar'        => 'Testimonial',
        'archives'              => 'Testimonial Archives',
        'attributes'            => 'Testimonial Attributes',
        'parent_item_colon'     => 'Parent Testimonial:',
        'all_items'             => 'All Testimonials',
        'add_new_item'          => 'Add New Testimonial',
        'add_new'               => 'Add New',
        'new_item'              => 'New Testimonial',
        'edit_item'             => 'Edit Testimonial',
        'update_item'           => 'Update Testimonial',
        'view_item'             => 'View Testimonial',
        'view_items'            => 'View Testimonials',
        'search_items'          => 'Search Testimonial',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Testimonial',
        'uploaded_to_this_item' => 'Uploaded to this Testimonial',
        'items_list'            => 'Testimonials list',
        'items_list_navigation' => 'Testimonials list navigation',
        'filter_items_list'     => 'Filter Testimonials List',
    );
    $args = array(
        'label'                 => 'Testimonial',
        'description'           => 'Testimonial',
        'labels'                => $labels,
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        // 'show_in_rest'          => true, // To use Gutenberg editor.
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-star-empty',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'testimonials', $args );

}
add_action( 'init', 'wcd_testimonials_post_type', 0 );

// Register Business Info Post Type
function wcd_business_info() {

	$labels = array(
		'name'                  => 'Business Info',
		'singular_name'         => 'Business Info',
		'menu_name'             => 'Business Info',
		'name_admin_bar'        => 'Business Info',
		'archives'              => 'Business Info Archives',
		'attributes'            => 'Business Info Attributes',
		'parent_item_colon'     => 'Parent Business Info:',
		'all_items'             => 'All Business Info',
		'add_new_item'          => 'Add New Business Info',
		'add_new'               => 'Add New',
		'new_item'              => 'New Business Info',
		'edit_item'             => 'Edit Business Info',
		'update_item'           => 'Update Business Info',
		'view_item'             => 'View Business Info',
		'view_items'            => 'View Business Info',
		'search_items'          => 'Search Business Info',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into business info',
		'uploaded_to_this_item' => 'Uploaded to this business info',
		'items_list'            => 'Business Info list',
		'items_list_navigation' => 'Business Info list navigation',
		'filter_items_list'     => 'Filter business info list',
	);
	$args = array(
		'label'                 => 'Business Info',
		'description'           => 'Business Info (Logo, Social Profiles, Address, Email, etc.)',
		'labels'                => $labels,
    'show_in_rest'          => true,
		'supports'              => array( 'title', 'editor', 'custom-fields', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-nametag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'business_info', $args );

}
add_action( 'init', 'wcd_business_info', 0 );
