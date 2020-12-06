<?php
/*******************
 * Load stylsheet and scripts
 */

function locks_theme_scripts() {
	// load bootstrap css
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
	// load main css
	wp_enqueue_style('main-styles', get_stylesheet_uri());
	// load scripts
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'locks_theme_scripts');
// load featured images
add_theme_support('post-thumbnails');
// load header image
$locks_image_header = array(
	# 'width' => 225,
	'height' => 72,
	'uploads' => true,
);
add_theme_support('custom-header', $locks_image_header);


