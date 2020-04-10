<?php 


function rs_theme_color($wp_customize){
	
	//SETTINGS
	$wp_customize->add_setting('rs_header_menu', array('default'=> '#fff'));
	$wp_customize->add_setting('rs_top_menu', array('default'=> '#323558'));
	$wp_customize->add_setting('rs_icon_social', array('default'=> '#323558'));
	$wp_customize->add_setting('rs_line_top', array('default'=> '#2a3c64'));
	$wp_customize->add_setting('rs_header_a', array('default'=> '#323558'));
	$wp_customize->add_setting('rs_color_btn', array('default'=> '#fff'));
	$wp_customize->add_setting('rs_background_btn', array('default'=> '#9fafe0'));

	//SECTIONS
	$wp_customize->add_section('rs_theme_colors', array(
		'title' => 'Cores do Tema',
		'priority' => 2
	));


	//CONTROLERS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'rs_header_menu',
			array(
				'label' => 'Cor do Header',
				'section' => 'rs_theme_colors',
				'settings' => 'rs_header_menu'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'rs_top_menu',
			array(
				'label' => 'Cor do Menu Superior',
				'section' => 'rs_theme_colors',
				'settings' => 'rs_top_menu'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'rs_icon_social',
			array(
				'label' => 'Cor do Icons Social',
				'section' => 'rs_theme_colors',
				'settings' => 'rs_icon_social'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'rs_line_top',
			array(
				'label' => 'Cor da Linha Superior',
				'section' => 'rs_theme_colors',
				'settings' => 'rs_line_top'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'rs_header_a',
			array(
				'label' => 'Cor do Texto do Blog',
				'section' => 'rs_theme_colors',
				'settings' => 'rs_header_a'
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'rs_color_btn',
			array(
				'label' => 'Cor do Botão',
				'section' => 'rs_theme_colors',
				'settings' => 'rs_color_btn'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'rs_background_btn',
			array(
				'label' => 'Cor do Background do Botão',
				'section' => 'rs_theme_colors',
				'settings' => 'rs_background_btn'
			)
		)
	);

}

function rs_style_customize(){ ?>

<style>

	.line{
		background: <?php echo get_theme_mod('rs_line_top'); ?>;
	}
	
	.navbar_header{
		background-color: <?php echo get_theme_mod('rs_header_menu'); ?>;
	}

	.nav-item a,
	.nav-link{
		color: <?php echo get_theme_mod('rs_top_menu'); ?> !important;
	}

	.icons_social a{
		color: <?php echo get_theme_mod('rs_icon_social'); ?> ;
	}

	header a,
	p a{
		color: <?php echo get_theme_mod('rs_header_a'); ?> ;
	}

	.btn-btnblue{
		background-color:  <?php echo get_theme_mod('rs_background_btn'); ?>;
		margin-left: 15px;
		color:  <?php echo get_theme_mod('rs_color_btn'); ?>;
	}


</style>

<?php

}

add_action('wp_head', 'rs_style_customize');