<?php 

function rs_theme_styles(){

	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

	// SCRIPTS
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/myconfig.js', array("jquery"), false, true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array("jquery"), false, true);
	wp_enqueue_script('jsdelivr', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js");

}