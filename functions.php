<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

// ADD PRODUCT CARD

function joro_card($wp_customize) {
	$wp_customize->add_section('joro-card-callout-section', array(
		'title' => 'Product Card'
	));
	$wp_customize->add_setting('joro-card-text', array(
		'default' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum voluptatum quis iste molestiae nemo. Quia, veniam minus. Labore, ut doloribus'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'joro-card-text-control', array(
		'label' => 'Card',
		'section' => 'joro-card-callout-section',
		'settings' => 'joro-card-text'
	)));
}

add_action('customize_register','joro_card');

function mytheme_custom_excerpt_length( $length ) {
    return 0;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 0);