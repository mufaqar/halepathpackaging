<?php // Register Custom Post Type

function instagram_updates_post_type($value) {

	$labels = array(
		'name'                => _x( 'Manage Instagram', 'Post Type General Name', 'saadali' ),
		'singular_name'       => _x( 'Manage Instagram', 'Post Type Singular Name', 'saadali' ),
		'menu_name'           => __( 'Manage Instagram', 'saadali' ),
		'parent_item_colon'   => __( 'Parent Instagram:', 'saadali' ),
		'all_items'           => __( 'All Instagram', 'saadali' ),
		'view_item'           => __( 'View Manage Instagram', 'saadali' ),
		'add_new_item'        => __( 'Add New Instagram', 'saadali' ),
		'add_new'             => __( 'Add New Instagram', 'saadali' ),
		'edit_item'           => __( 'Edit Instagram', 'saadali' ),
		'update_item'         => __( 'Update Instagram', 'saadali' ),
		'search_items'        => __( 'Search Instagram', 'saadali' ),
		'not_found'           => __( 'No Instagram found', 'saadali' ),
		'not_found_in_trash'  => __( 'No Instagram found in Trash', 'saadali' ),
	);
	$args = array(
		'label'               => __( 'Manage Instagram', 'saadali' ),
		'description'         => __( 'Upload Manage Instagram ', 'saadali' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ,'thumbnail','editor', 'post-formats' ),
		'taxonomies'          => array( '', '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => get_stylesheet_directory_uri() . '/lib/listing.gif',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'instagram-updates', $args );

}
// Hook into the 'init' action
add_action( 'init', 'instagram_updates_post_type', 0 ); 


// 
add_action('do_meta_boxes', 'instagram_image_box');
function instagram_image_box() {
	remove_meta_box( 'postimagediv', 'photo-gallery', 'side' );
	add_meta_box('postimagediv', __('Instagram Image'), 'post_thumbnail_meta_box', 'instagram-updates', 'normal', 'high');
}

 ?>