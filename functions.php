<?php 

require get_template_directory() . "/include/setup.php";
require_once get_template_directory() . "/class-wp-bootstrap-navwalker.php";


if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('wp_enqueue_scripts','rs_theme_styles');
// add_action('after_setup_theme','rs_theme_setup');
// add_action('widgets_init','rs_widgets');