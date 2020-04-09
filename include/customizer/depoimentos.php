<?php 


/*
 1- SETTING = ARMAZENAMENTO NO BANDO DE DADOS
 2 - PANEL
 3- SECTIONS = GRUPO DAS PROPRIEDADES
 4- CONTROLES = AS PROPRIEDADES
 PARA IMAGEM USAR WP_Customize_Image_Control
*/
function rs_depoimentos_customizer($wp_customize){

	// SETTING
	$wp_customize->add_setting('rs_depo1_url', array('default'=> ''));
	$wp_customize->add_setting('rs_depo1_txt', array('default'=> ''));
	$wp_customize->add_setting('rs_depo1_autor', array('default'=> ''));

	$wp_customize->add_setting('rs_depo2_url', array('default'=> ''));
	$wp_customize->add_setting('rs_depo2_txt', array('default'=> ''));
	$wp_customize->add_setting('rs_depo2_autor', array('default'=> ''));

	$wp_customize->add_setting('rs_depo3_url', array('default'=> ''));
	$wp_customize->add_setting('rs_depo3_txt', array('default'=> ''));
	$wp_customize->add_setting('rs_depo3_autor', array('default'=> ''));

	$wp_customize->add_setting('rs_depo4_url', array('default'=> ''));
	$wp_customize->add_setting('rs_depo4_txt', array('default'=> ''));
	$wp_customize->add_setting('rs_depo4_autor', array('default'=> ''));

	//PANEL
	$wp_customize->add_panel('rs_depoimentos', array(
		'title' => 'Depoimentos',
		'priority' => 10
	));

	//SECTION
	$wp_customize->add_section('rs_depo1', array(
		'title' => 'Depoimento 1',
		'priority' => 1,
		'panel' => 'rs_depoimentos'
	));
	
	$wp_customize->add_section('rs_depo2', array(
		'title' => 'Depoimento 2',
		'priority' => 2,
		'panel' => 'rs_depoimentos'
	));

	$wp_customize->add_section('rs_depo3', array(
		'title' => 'Depoimento 3',
		'priority' => 3,
		'panel' => 'rs_depoimentos'
	));

	$wp_customize->add_section('rs_depo4', array(
		'title' => 'Depoimento 4',
		'priority' => 4,
		'panel' => 'rs_depoimentos'
	));

	//CONTROLLERS
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_depo1_txt',
			array(
				'label' => 'Texto:',
				'section' => 'rs_depo1',
				'settins' => 'rs_depo1_txt'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_depo2_txt',
			array(
				'label' => 'Texto:',
				'section' => 'rs_depo2',
				'settins' => 'rs_depo2_txt'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_depo3_txt',
			array(
				'label' => 'Texto:',
				'section' => 'rs_depo3',
				'settins' => 'rs_depo3_txt'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_depo4_txt',
			array(
				'label' => 'Texto:',
				'section' => 'rs_depo4',
				'settins' => 'rs_depo4_txt'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_depo1_autor',
			array(
				'label' => 'Autor:',
				'section' => 'rs_depo1',
				'settins' => 'rs_depo1_autor'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_depo2_autor',
			array(
				'label' => 'Autor:',
				'section' => 'rs_depo2',
				'settins' => 'rs_depo1_autor'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_depo3_autor',
			array(
				'label' => 'Autor:',
				'section' => 'rs_depo3',
				'settins' => 'rs_depo1_autor'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rs_depo4_autor',
			array(
				'label' => 'Autor:',
				'section' => 'rs_depo4',
				'settins' => 'rs_depo1_autor'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'rs_depo1_url',
			array(
				'label' => 'Url Image:',
				'section' => 'rs_depo1',
				'settins' => 'rs_depo1_url',
				'width' => 150,
				'height' => 150
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'rs_depo2_url',
			array(
				'label' => 'Url Image:',
				'section' => 'rs_depo2',
				'settins' => 'rs_depo1_url',
				'width' => 150,
				'height' => 150
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'rs_depo3_url',
			array(
				'label' => 'Url Image:',
				'section' => 'rs_depo3',
				'settins' => 'rs_depo1_url',
				'width' => 150,
				'height' => 150
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'rs_depo4_url',
			array(
				'label' => 'Url Image:',
				'section' => 'rs_depo4',
				'settins' => 'rs_depo1_url',
				'width' => 150,
				'height' => 150
			)
		)
	);


}