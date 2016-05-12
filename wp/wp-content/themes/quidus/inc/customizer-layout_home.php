<?php
	
	/* ---------------------------------- */
		
	/* ------ // Layout -> Home // ------ */
		
	/* ---------------------------------- */
	
	/* Header Image Upload */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'upload',
		'setting'     => 'quidus_header_image',
		'label'       => __( 'Header Image', 'quidus' ),
		'section'     => 'quidus_home_layout',
		'default'     => '',
		'priority'    => 10,
	));
	
	/* Enable Transparent Menu */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_transparent_menu_home_enable',
		'label'       => __( 'Enable Transparent Menu On Home Page', 'quidus' ),
		'section'     => 'quidus_home_layout',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* TranslateY Effect */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_header_image_parallax_translate',
		'label'       => __( 'Header Image TranslateY Count', 'quidus' ),
		'section'     => 'quidus_home_layout',
		'default'     => 225,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 0,
			'max'  => 300,
			'step' => 1
		),
	));
	
	/* Enable Home Header Text Box */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_enable_home_header_text',
		'label'       => __( 'Show Text Box In Home Header Image', 'quidus' ),
		'section'     => 'quidus_home_layout',
		'default'     => true,
		'priority'    => 10,
	));
	
	/* Home Header Text Box Heading */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'settings'    => 'quidus_home_header_heading',
		'label'       => __( 'Header Text Box Heading', 'quidus' ),
		'default' 	  => __( 'Frank L. Burton', 'quidus' ),
		'section'     => 'quidus_home_layout',
		'priority'    => 10
	));
	
	/* Home Header Text Box Description */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'textarea',
		'settings'    => 'quidus_home_header_description',
		'label'       => __( 'Header Text Box Description', 'quidus' ),
		'default' 	  => __( 'I am a professional web developer from New York.', 'quidus' ),
		'section'     => 'quidus_home_layout',
		'priority'    => 10
	));
	
	/* Enable Home Header Text Box Background */

	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_enable_home_header_text_background',
		'label'       => __( 'Apply Background To Home Header Text Box', 'quidus' ),
		'section'     => 'quidus_home_layout',
		'default'     => true,
		'priority'    => 10,
	));
	
	/* Home Header Text Box Background Opacity */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_enable_home_header_text_background_opacity',
		'label'       => __( 'Text Box Background Opacity', 'quidus' ),
		'section'     => 'quidus_home_layout',
		'default'     => 50,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1
		),
	));
	
	/* Hide Featured Image On Home Page */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_disable_featured_image_home',
		'label'       => __( 'Hide Featured Image On Home Page', 'quidus' ),
		'description' => __( 'Faster home page loading speed improves on-page SEO but may hurt aesthetics.', 'quidus'),
		'section'     => 'quidus_home_layout',
		'default'     => false,
		'priority'    => 10,
	));

?>