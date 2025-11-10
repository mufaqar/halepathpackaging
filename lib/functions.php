<?php // Register Custom Post Type
function banners_post_type($value) {
    $labels = array(
        'name'                => _x( 'Home Banners', 'Post Type General Name', 'adnansmb' ),
        'singular_name'       => _x( 'Home Banners', 'Post Type Singular Name', 'adnansmb' ),
        'menu_name'           => __( 'Home Banners', 'adnansmb' ),
        'parent_item_colon'   => __( 'Parent Home Banners:', 'adnansmb' ),
        'all_items'           => __( 'All Home Banners', 'adnansmb' ),
        'view_item'           => __( 'View Home Banners', 'adnansmb' ),
        'add_new_item'        => __( 'Add New Home Banners', 'adnansmb' ),
        'add_new'             => __( 'Add New Home Banners', 'adnansmb' ),
        'edit_item'           => __( 'Edit Home Banners', 'adnansmb' ),
        'update_item'         => __( 'Update Home Banners', 'adnansmb' ),
        'search_items'        => __( 'Search Home Banners', 'adnansmb' ),
        'not_found'           => __( 'No Home Banners found', 'adnansmb' ),
        'not_found_in_trash'  => __( 'No Home Banners found in Trash', 'adnansmb' ),
    );
    $args = array(
        'label'               => __( 'Banners', 'adnansmb' ),
        'description'         => __( 'Home Banners information pages', 'adnansmb' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail', 'post-formats' ),
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
    register_post_type( 'home-banners', $args );
}
// Hook into the 'init' action
add_action( 'init', 'banners_post_type', 0 );
//
add_action('do_meta_boxes', 'customposttype_image_box');
function customposttype_image_box() {
    remove_meta_box( 'postimagediv', 'home-banners', 'side' );
    add_meta_box('postimagediv', __('Banner Image'), 'post_thumbnail_meta_box', 'home-banners', 'normal', 'high');
}

function wd_admin_menu_rename() {
    global $menu; // Global to get menu array
    global $submenu; // Global to get submenu array
    $menu[5][0] = 'Products'; // Change name of posts to portfolio
    $submenu['edit.php'][5][0] = 'All Products'; // Change name of all posts to all portfolio items
}
add_action( 'admin_menu', 'wd_admin_menu_rename' );

require 'reg-clients.php';
require 'reg-instagram.php';
function tg_include_custom_post_types_in_search_results( $query ) {
	if ( $query->is_main_query() && $query->is_search() && ! is_admin() ) {
		$query->set( 'post_type', array( 'post' ) );
	}
}
add_action( 'pre_get_posts', 'tg_include_custom_post_types_in_search_results' );
