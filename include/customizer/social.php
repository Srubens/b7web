<?php 


/*
 1- SETTING = ARMAZENAMENTO NO BANDO DE DADOS
 2- SECTIONS = GRUPO DAS PROPRIEDADES
 3- CONTROLES = AS PROPRIEDADES
*/
function rs_social_customizer($wp_customize){

	//SETTINGS
	$wp_customize->add_setting("rs_twitter", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rs_facebook", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rs_github", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rs_youtube", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rs_behance", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rs_dribbble", array(
		'default' => ''
	));

	//SECTIONS
	$wp_customize->add_section('rs_social_section', array(
		'title' => 'Redes Sociais',
		'priority' => '',
		'panel' => 'opcoes'
	));

	//CONTROLLERS
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_twitter',
			array(
				'label' => 'link do twitter',
				'section' => 'rs_social_section',
				'settings' => 'rs_twitter',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_facebook',
			array(
				'label' => 'link do facebook',
				'section' => 'rs_social_section',
				'settings' => 'rs_facebook',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_github',
			array(
				'label' => 'link do github',
				'section' => 'rs_social_section',
				'settings' => 'rs_github',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_youtube',
			array(
				'label' => 'link do youtube',
				'section' => 'rs_social_section',
				'settings' => 'rs_youtube',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_behance',
			array(
				'label' => 'link do behance',
				'section' => 'rs_social_section',
				'settings' => 'rs_behance',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_dribbble',
			array(
				'label' => 'link do dribbble',
				'section' => 'rs_social_section',
				'settings' => 'rs_dribbble',
				'type' => 'text'
			)
		)
	);


}