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



add_action('wp_ajax_send_order_email', 'send_order_email');
add_action('wp_ajax_nopriv_send_order_email', 'send_order_email');

function send_order_email() {
   // $to = get_option('admin_email'); // Admin email
	$to = 'mufaqar@gmail.com';
    $subject = "New Box Order from Website";

    $message = "
    <h2>New Order Details</h2>
    <p><strong>Dimension:</strong> {$_POST['dimension']}</p>
    <p><strong>Box Stock:</strong> {$_POST['boxStock']}</p>
    <p><strong>Quantity:</strong> {$_POST['quantity']}</p>
    <p><strong>Printing:</strong> {$_POST['printing']}</p>

    <h3>Shipping Info</h3>
    <p><strong>Name:</strong> {$_POST['recipientName']}</p>
    <p><strong>Phone:</strong> {$_POST['phoneNumber']}</p>
    <p><strong>Address:</strong> {$_POST['streetAddress']}, {$_POST['city']}, {$_POST['state']} {$_POST['zipCode']}</p>
    <p><strong>Additional Info:</strong> {$_POST['additionalInfo']}</p>
    ";

    $headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail($to, $subject, $message, $headers);

    echo "✅ Your order has been sent successfully! We'll contact you shortly.";
    wp_die();
}

