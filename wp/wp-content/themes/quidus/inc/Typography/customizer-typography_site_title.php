<?php
	
	/* -------------------------------------------- */
		
	/* ------ // Typography -> Site Title // ------ */
		
	/* -------------------------------------------- */
	
	/* Enable Custom Site Title Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_site_title_typography_enable',
		'label'       => __( 'Enable Custom Site Title Typography', 'quidus' ),
		'section'     => 'quidus_typography_site_title',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Site Title Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_site_title_size',
		'label'       => __( 'Site Title Font Size', 'quidus' ),
		'section'     => 'quidus_typography_site_title',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom Site Title Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_site_title_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_site_title',
		'default'     => array(
			'font-family'    => 'Playfair Display',
			'font-weight'    => '700',
			'line-height'    => '1.2308',
			'letter-spacing' => '0',
		),
		'priority'    => 10,
		'choices'     => array(
			'font-style'     => true,
			'font-family'    => true,
			'font-size'      => false,
			'font-weight'    => true,
			'line-height'    => false,
			'letter-spacing' => true,
		),
		'output' => array(
			array(
				'element' => array('xx'),
			),
		),
	) );