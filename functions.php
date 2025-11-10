<?php session_start();
$userid = session_id();
define('THEME_DIR',get_template_directory_uri());
if ( function_exists( 'add_theme_support' ) ){
    add_theme_support( 'post-thumbnails' );
    //add_image_size( 'gallerythumb', 225, 195, true ); //(cropped)
}
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Navigation', 'Top'),
            'mobilemenu' => __( 'Mobile Navigation', 'Top'),
            'secondary' => __( 'Secondary Navigation', 'dynamicexperts' ),
            'sidebarmenu' => __( 'Category Sidebar Navigation', 'Top'),
        ));
}
function home_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
// Register custom navigation walker
  require_once('wp-bootstrap-navwalker.php');

///Walker Bootstrap Menu Ends///
require get_template_directory().'/lib/functions.php';

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer About us',
		'id' => 'sidebar-about-us',
		'description' => 'These are widgets for the footer about us widgets.',
		'before_widget' => '<div class="widget %2$s widgetarea single-wedge">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-herading">',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Footer Information Menu',
		'id' => 'footer-widget-1',
		'description' => 'These are widgets for the footer Information widgets.',
		'before_widget' => '<div class="widget %2$s widgetarea single-wedge"><div class="footer-links"><div class="footer-row">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h4 class="footer-herading">',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Footer Categories Menu',
		'id' => 'footer-widget-2',
		'description' => 'These are widgets for the footer Categories widgets.',
		'before_widget' => '<div class="widget %2$s widgetarea single-wedge"><div class="footer-links"><div class="footer-row">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h4 class="footer-herading">',
		'after_title' => '</h4>'
	));
}
