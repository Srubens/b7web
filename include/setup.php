<?php 

function rs_theme_styles(){

	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

	// SCRIPTS
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/main.js', array("jquery"), false, true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array("jquery"), false, true);
	wp_enqueue_script('jsdelivr', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js");

}


function rs_theme_setup(){

	// SUPORTE PARA IMAGENS 
	add_theme_support('post-thumbnails');

	//SUPORTE PARA TITLE DO TEMA
	add_theme_support('title-tag');

	//LOGO CUSTOMIZADA
	add_theme_support('custom-logo');

	//AJUSTANDO OS TIPOS DE POSTS
	add_theme_support('post-formats', array('video', 'audio', 'gallery'));

	//SUPORTE PARA MENUS
	add_theme_support('menus');

	register_nav_menu('primary', ("Menu Primario"));
	register_nav_menu('topo', 'Menu Topo');

	// REMOVENDO A BARRA DO ADMIN
	// show_admin_bar(false);


}

//PARA WIDGETS
function rs_widgets(){

	$SidebarLateral = [
		'name' => 'Sidebar Lateral',
		'id' => 'rs_sidebar',
		'description' => 'Sidebar Lateral',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	];

	$SidebarRodape = [
		'name' => 'Sidebar Rodape',
		'id' => 'rs_rodape',
		'description' => 'Sidebar Rodape',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	];

	register_sidebar($SidebarLateral);
	register_sidebar($SidebarRodape);

}