<?php // Register Custom Post Type

function clients_updates_post_type($value) {

	$labels = array(
		'name'                => _x( 'Clients Logo', 'Post Type General Name', 'saadali' ),
		'singular_name'       => _x( 'Manage Clients Logo', 'Post Type Singular Name', 'saadali' ),
		'menu_name'           => __( 'Clients Logo', 'saadali' ),
		'parent_item_colon'   => __( 'Parent Clients Logo:', 'saadali' ),
		'all_items'           => __( 'All Clients Logo', 'saadali' ),
		'view_item'           => __( 'View Manage Clients Logo', 'saadali' ),
		'add_new_item'        => __( 'Add New Clients Logo', 'saadali' ),
		'add_new'             => __( 'Add New Clients Logo', 'saadali' ),
		'edit_item'           => __( 'Edit Clients Logo', 'saadali' ),
		'update_item'         => __( 'Update Clients Logo', 'saadali' ),
		'search_items'        => __( 'Search Clients Logo', 'saadali' ),
		'not_found'           => __( 'No Clients Logo found', 'saadali' ),
		'not_found_in_trash'  => __( 'No Clients Logo found in Trash', 'saadali' ),
	);
	$args = array(
		'label'               => __( 'Clients Logo', 'saadali' ),
		'description'         => __( 'Upload Manage Clients Logo ', 'saadali' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ,'thumbnail', 'post-formats' ),
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
	register_post_type( 'clients-updates', $args );

}
// Hook into the 'init' action
add_action( 'init', 'clients_updates_post_type', 0 ); 


// 
add_action('do_meta_boxes', 'clients_image_box');
function clients_image_box() {
	remove_meta_box( 'postimagediv', 'photo-gallery', 'side' );
	add_meta_box('postimagediv', __('clients Image'), 'post_thumbnail_meta_box', 'clients-updates', 'normal', 'high');
}

 ?>